<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    // filter theo category
    public function filter(Request $request)
    {
        $data = Product::with('category');
        if ($request->category_id) {
            $data->where([
                ['category_id', '=', $request->category_id],
                ['status', '=', 1]
            ]);
        }
        $filter = $data->get();

        return response()->json([
            'status' => 'success',
            'data' => $filter
        ], 200);
    }

    //Search theo price, sold, created_at
    public function search(Request $request)
    {
        // DB::enableQueryLog();

        $query = Product::query()
                        ->leftJoin('order_detail','order_detail.product_id','=','products.id')
                        ->select('products.*','order_detail.quantity as sold');
        // dd($request->all());
        //Search theo sold
        if ($request->sortSold == 1) {
            $query->orderBy('sold','ASC');
        } elseif ($request->sortSold == 2) {
            $query->orderBy('sold','DESC');
        }


        //Search theo price
        if ($request->sortPrice == 1) {
            // dd(1);
            $query->orderBy('price','ASC');
            // dd($query->toSql());
        } elseif ($request->sortPrice == 2) {
            $query->orderBy('price','DESC');
        }

        //Search theo created_at
        if ($request->sortCreated == 1) {
            $query->orderBy('created_at','ASC');
        } elseif ($request->sortCreated == 2) {
            $query->orderBy('created_at','DESC');
        }
        $query = $query->get();
        $code = 200;
        return response()->json([
            'status' => 'success',
            'data' => $query
        ], $code);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
