<?php

namespace App\Http\Controllers\fe;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\OrderDetail;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class CartController extends Controller
{
    public function orderHistory()
    {
        $user = auth()->user()->name;
        $data = Order::leftJoin('order_detail', 'order_detail.order_id', 'orders.id')
                        ->select(
                            'orders.*',
                            'order_detail.name_product as name_product',
                            'order_detail.image as image_product',
                            'order_detail.quantity as quantity',
                            'order_detail.price as price',
                            )
                        ->where('orders.fullname', $user)
                        ->paginate(config('constants.paginate.paginate_admins'));

        $count_order = Order::where('orders.fullname', '=', $user)->count();

        return view('fe.cart.history', compact('data','count_order'));
    }

    public function changeStatus(Request $request, $id)
    {
        $order = Order::find($id);
        $order->status = config('constants.status.buyer_cancel');

        $order->save();

        Mail::send('cms.email.send',compact('order'), function($email) {
            $email->subject('Change Status order');  //Tieu de mail
            $email->to(auth()->user()->email,'phucbo9898');
        });

        return redirect()->back();
    }

    public function postOrder(Request $request)
    {

        $name = auth()->user()->name;
        $email = auth()->user()->email;
        $phone = auth()->user()->phone;
        $days = Carbon::now()->day;
        $months = Carbon::now()->month;
        $years = Carbon::now()->year;
        $time_order = Carbon::now();
        $delivery_time = Carbon::now()->addDays(5);
        $name_product = $request->product_name;
        $quantity = $request->qty;
        $price = $request->price;
        $total = $request->qty * $request->price;
        $data = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'name_product' => $name_product,
            'quantity' => $quantity,
            'price' => $price,
            'total' => $total,
            'day' => $days,
            'month' => $months,
            'year' => $years,
            'time_order' => $time_order,
            'delivery_time' => $delivery_time,
        ];

        // Save to database table order
        $order = new Order();
        $order->fullname = $data['name'];
        $order->address = $data['email'];
        $order->status = config('constants.status.new'); //0:new, 1:buyer cancel, 2:admin cancel, 3:done
        $order->total = $data['total'];
        $order->save();

        $order->code = 'DH'.$order->id;
        $order->save();

        // Save to database table order detail
        $detail = new OrderDetail();
        $detail->order_id = $order->id;
        $detail->product_id = $request->product_id;
        $detail->name_product = $data['name_product'];
        $detail->image = $request->image;
        $detail->quantity = $data['quantity'];
        $detail->price = $data['price'];
        $detail->save();


        Mail::send('fe.email.send',compact('data'), function($email) {
            $email->subject('Hóa đơn thanh toán');  //Tieu de mail
            $email->to(auth()->user()->email);
        });
        return redirect()->route('fe.home');
    }
}
