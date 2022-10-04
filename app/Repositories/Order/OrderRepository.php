<?php

namespace App\Repositories\Order;

use App\Models\Order;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;

class OrderRepository extends BaseRepository implements OrderRepositoryInterface
{
    public function getModel()
    {
        return Order::class;
    }

    public function getAll($limit = 0)
    {
        return Order::leftJoin('order_detail','orders.id','=','order_detail.order_id')
                            ->leftJoin('products','products.id','=','order_detail.product_id')
                            ->select('orders.*','products.name as name_product','order_detail.image as image_product','order_detail.quantity as qty')
                            ->orderBy('updated_at', 'DESC')
                            ->paginate(($limit == 0) ? config('constants.paginate.paginate_admins') : $limit);
    }

    public function getName($id)
    {
        return Order::join('order_detail', 'orders.id', '=', 'order_detail.order_id')
                        ->join('products', 'products.id', '=','order_detail.product_id')
                        ->join('categories', 'categories.id', '=', 'products.category_id')
                        ->get([
                            'orders.*',
                            'products.name as name_product',
                            'products.image as image_product',
                            'order_detail.quantity as quantity',
                            'products.price as price',
                            'categories.name as name_category'])
                        ->find($id);
    }

    public function find($id)
    {
        return Order::findOrFail($id);
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $status_order = $request->status_order;
        $date_from = $request->date_from;
        $date_to = $request->date_to;
        $orders = Order::query()
                    ->leftJoin('order_detail','orders.id','=','order_detail.order_id')
                    ->leftJoin('products','products.id','=','order_detail.product_id')
                    ->select('orders.*','products.name as name_product','order_detail.image as image_product','order_detail.quantity as qty');

        // check name
        if ($name != "") {
            $orders->where('products.name', 'LIKE', "%{$name}%");
        }

        // check status
        if ($status_order != "" || $status_order != NULL) {
            $orders ->where('orders.status', '=', $status_order);
        }

        // check date from
        if ($date_from != "") {
            $orders->whereDate('orders.created_at', '>=', $date_from);
        }

        // check date to
        if ($date_to != "") {
            $orders->whereDate('orders.created_at', '<=', $date_to);
        }

        $orders = $orders->paginate(config('constants.paginate.paginate_admins'));
        $orders->appends(['name'=> $name,'status_order'=>$status_order,'date_from'=>$date_from,'date_to'=>$date_to]);

        return $orders;
    }

}
