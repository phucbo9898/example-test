<?php

namespace App\Http\Controllers\fe;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {
        $categories = Category::whereNull('deleted_at')->distinct()->get();
        $products = Product::with('category')
                            ->select('products.*','products.deleted_at as product_deleted',DB::raw('SUM(order_detail.quantity) as sold'))
                            ->leftJoin('order_detail', 'products.id', '=', 'order_detail.product_id')
                            ->whereNull('products.deleted_at')
                            ->where('products.status','=',config('constants.product.status.active'))
                            ->groupBy('products.id')
                            ->paginate(config('constants.paginate.paginate_home'));

        return view('fe.index.index', compact('products', 'categories'));
    }

    // detail product
    public function productDetail($id)
    {
        try {
            $categories = Category::get();
            $products = Product::select('products.*',DB::raw('SUM(order_detail.quantity) as sold'))
                                ->leftJoin('order_detail','order_detail.product_id','=','products.id')
                                ->where(['status'=>config('constants.product.status.active'), 'products.id'=>$id])
                                ->groupBy('products.id')
                                ->firstOrFail();

            $relateProduct = Product::select('products.*', DB::raw('SUM(order_detail.quantity) as sold'))
                                    ->leftJoin('order_detail','order_detail.product_id','=','products.id')
                                    ->where([
                                        ['status','=',config('constants.product.status.active')],
                                        ['products.id', '<>', $products->id],
                                        ['category_id','=',$products->category_id]])
                                    ->groupBy('products.id')
                                    ->orderBy('created_at','DESC')
                                    ->limit(config('constants.paginate.paginate_relate_products'))
                                    ->get();
        } catch (\Exception $exception) {
            return back()->withErrors($exception->getMessages())->withInput();
        }

        return view('fe.detail', compact('products','relateProduct','categories'));
    }


}
