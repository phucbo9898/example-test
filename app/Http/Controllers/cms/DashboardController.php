<?php

namespace App\Http\Controllers\cms;

use App\Models\Category;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $start = new Carbon('first day of this month');
        $end = new Carbon('last day of this month');
        $month_now = Carbon::now()->month;
        $count_order = Order::whereMonth('created_at', '=', $month_now)->count();
        $count_user = DB::table('users')->where('role', config('constants.role.fe_user'))->count();
        $count_product = DB::table('products')->where('status', config('constants.product.status.active'))->count();
        $count_categories = Category::count();
        $count_amount = Order::where('status', '=', config('constants.status.done'))->whereMonth('created_at', '=', $month_now)->sum('total');
        $month = Carbon::now()->format('F');
        $data = [
            'count_order'=>$count_order,
            'count_user'=>$count_user,
            'count_categories'=>$count_categories,
            'count_product' =>$count_product,
            'count_amount' =>$count_amount,
            'month' => $month,
            'start' =>$start,
            'end' =>$end,
        ];
        // dd($data);die;
        return view('cms.dashboard.index', compact('data'));
    }

    public function statisticYear()
    {
        $orders = Order::select(DB::raw("COUNT(*) as count"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('count');
        $month_orders = Order::select(DB::raw("Month(created_at) as month"))
                    ->whereYear('created_at', date('Y'))
                    ->groupBy(DB::raw("Month(created_at)"))
                    ->pluck('month');
        $data_order = [0,0,0,0,0,0,0,0,0,0,0,0];
        foreach ($month_orders as $index => $month_order) {

            $data_order[--$month_order] = $orders[$index];

        }

        $totals = Order::select(DB::raw("SUM(total) as count"))
                        ->whereYear('created_at', date('Y'))
                        ->groupBy(DB::raw("Month(created_at)"))
                        ->pluck('count');
        $month_totals = Order::select(DB::raw("Month(created_at) as month"))
                                ->whereYear('created_at', date('Y'))
                                ->groupBy(DB::raw("Month(created_at)"))
                                ->pluck('month');
        $data_total = [0,0,0,0,0,0,0,0,0,0,0,0];
        foreach ($month_totals as $index => $month_total) {
            $data_total[--$month_total] = $totals[$index];
        }
        // dd($data_total);
        return view('cms.dashboard.year', compact('data_order','data_total'));
    }

    public function statistic_month(Request $request)
    {
        $date_from = $request->date_from;
        $date_to = $request->date_to;
        $count_user = DB::table('users')->where('role', config('constants.role.fe_user'))->count();
        $count_product = DB::table('products')->where('status', config('constants.product.status.active'))->count();
        $count_categories = Category::count();
        $count_order = Order::query();
        $count_amount = Order::query()->where('status', config('constants.status.done'));
        $month_now = Carbon::now()->month;

        // Date from
        if (!empty($date_from)) {
            $count_order->whereDate('created_at', '>=', $date_from);
            $count_amount->whereDate('created_at', '>=', $date_from);
        }

        // Date to
        if (!empty($date_to)) {
            $count_order->whereDate('created_at', '<=', $date_to);
            $count_amount->whereDate('created_at', '<=', $date_to);
        }

        if (!empty($date_to) && $date_from > $date_to) {
            $alert='From date is greater than to date, please choose again!';
            return redirect()->back()->with('alert',$alert);
        }

        $count_order = $count_order->count();
        $count_amount = $count_amount->sum('total');

        return view('cms.dashboard.month', compact('date_from','date_to','count_order','count_amount','count_user','count_product','count_categories'))->with('data', $count_order, $count_amount);
    }

}
