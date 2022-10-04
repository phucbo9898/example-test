<?php

namespace App\Http\Controllers\cms;

use App\Exports\OrderExport;
use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Repositories\Order\OrderRepositoryInterface;
use Illuminate\Support\Facades\Mail;
use Excel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class OrderController extends Controller
{
    public $orderRepository;

    public function __construct(OrderRepositoryInterface $orderRepository)
    {
        $this->orderRepository = $orderRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $limit = $request->has('limit') ? $request->get('limit') : 0;

        $status = DB::table('orders')->distinct()->get(['status']);
        $orders = $this->orderRepository->getAll($limit);
        $orders->appends(['limit'=> $limit, 'page' => 2]);

        return view('cms.order.index', compact('orders', 'status', 'limit'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = $this->orderRepository->find($id);
            $name_category = $this->orderRepository->getName($id);

            if ($name_category['price'] != '' || $name_category['quantity'] != '') {
                $amount = $name_category['price'] * $name_category['quantity'];
            }
        } catch (ModelNotFoundException $exception) {
            $this->categoryRepository->logMsg($exception);
            return redirect()->route('cms.order.index');
        }

        return view('cms.order.view', compact('data', 'name_category', 'amount'));
    }

    public function search(Request $request)
    {
        $status = DB::table('orders')->distinct()->get(['status']);
        $orders = $this->orderRepository->search($request);

        return view('cms.order.search',compact('orders','status'));
    }

    /**
     * Change status order to done with button.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function changeStatusToDone(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = config('constants.status.done');
        $order->save();

        Mail::send('cms.email.send',compact('order'), function($email) use ($order) {
            $email->subject('Change Status order');  //Tieu de mail
            $email->to($order->address,'phucbo9898');
        });

        if (!is_null($order)) {
            return redirect()->route('cms.order.index')->with('success-done', 'Success! Order updated status done.');
        }
        return redirect()->back();
    }

    /* Change status order to in progress, admin cancel, buyer cancel*/
    public function changeStatus(Request $request, $id)
    {
        $user = User::find($id);
        $order = Order::find($id);
        $order->status = $request->change_status;
        $order->save();

        $status = '';
        if ($request->change_status == config('constants.status.in_progress')) {
            $status = 'In progress';
        } elseif ($request->change_status == config('constants.status.buyer_cancel')) {
            $status = 'Buyer cancel';
        } else {
            $status = 'Admin cancel';
        }

        Mail::send('cms.email.send',compact('order'), function($email) use($order) {
            $email->subject('Change Status order');  //Tieu de mail
            $email->to($order->address,'phucbo9898');
        });

        if (!is_null($order)) {
            return redirect()->back()->with('success-change','Success! Order updated status ' . $status);
        }
    }

    /* Change status order to admin cancel with button*/
    public function changeStatusToAdminCancel(Request $request, $id)
    {
        $user = User::find($id);
        $order = Order::find($id);
        $order->status = config('constants.status.admin_cancel');
        $order->save();

        Mail::send('cms.email.send',compact('order'), function($email) use ($order) {
            $email->subject('Change Status order');  //Tieu de mail
            $email->to($order->address,'phucbo9898');
        });
        return redirect()->back();
    }

    /*
    * Export data
    */
    public function exportAll()
    {
        return Excel::download(new OrderExport, 'Statistic-order'.'.xlsx');
    }
}
