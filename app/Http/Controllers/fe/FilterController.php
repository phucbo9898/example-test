<?php

namespace App\Http\Controllers\fe;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FilterController extends Controller
{
    public function search(Request $request)
    {

        $categories = Category::all();
        $sort_price = $request->sort_price;
        $sort_sold = $request->sort_sold;
        $sort_created_at = $request->sort_created_at;
        $category_id = $request->category_id;

        $products = Product::query()
                            ->select('products.*', DB::raw('SUM(order_detail.quantity) as sold'))
                            ->leftJoin('order_detail','order_detail.product_id','=','products.id')
                            ->where('products.status', config('constants.product.status.active'))
                            ->groupBy('products.id');

        //check filter
        if (!empty($category_id)) {
            $products->where(['products.category_id' => $category_id]);
        }

        // check price
        if (!empty($sort_price)) {
            if ($sort_price == config('constants.sort.asc')) {
                $products->orderBy('price', 'ASC');
            } else {
                $products ->orderBy('price', 'DESC');
            }
        }

        // check sold
        if ($sort_sold != '' || $sort_sold != NULL) {
            if ($sort_sold == config('constants.sort.asc')) {
                $products->orderBy('sold', 'ASC');
            } else {
                $products ->orderBy('sold', 'DESC');
            }
        }

        // check created at
        if ($sort_created_at != '' || $sort_created_at != NULL) {
            if ($sort_created_at == config('constants.sort.asc')) {
                $products->orderBy('created_at', 'ASC');
            } else {
                $products ->orderBy('created_at', 'DESC');
            }
        }

        $products = $products->paginate(config('constants.paginate.paginate_home'));
        $products->appends([
            'sort_price' => $sort_price,
            'sort_sold' => $sort_sold,
            'sort_created_at' => $sort_created_at,
            'category_id' => $category_id
        ]);
        return view('fe.search.search', compact('products','categories','sort_price','sort_sold','sort_created_at','category_id'))->with('data',$products);
    }

}
