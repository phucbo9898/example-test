<?php

namespace App\Repositories\Product;

use App\Models\Product;
use App\Repositories\BaseRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class ProductRepository extends BaseRepository implements ProductRepositoryInterface
{
    public function getModel()
    {
        return Product::class;
    }

    public function getAll()
    {
        $products = Product::with('category')
                        ->select('products.*','products.deleted_at as product_deleted',DB::raw('SUM(order_detail.quantity) as sold'))
                        ->leftJoin('order_detail', 'products.id', '=', 'order_detail.product_id')
                        ->whereNull('products.deleted_at')
                        ->groupBy('products.id')
                        ->orderBy('products.updated_at','DESC')
                        ->paginate(config('constants.paginate.paginate_admins'));
        return $products;
    }

    public function find($id)
    {
        return Product::join('categories', 'categories.id', '=', 'products.category_id')
                        ->select('products.*','products.name as name_product', 'categories.name as name_category')
                        ->findOrFail($id);
    }

    public function store(array $data)
    {
        $user = new Product();
        $user->name = $data['name'];
        $user->image = $data['image'];
        $user->category_id = $data['category_id'];
        $user->description = $data['description'];
        $user->price = $data['price'];
        $user->status = $data['status'];
        $user->save();

        return $user;
    }

    public function edit($id)
    {
        return Product::with('category')->findOrFail($id);
    }

    public function update($id, array $data)
    {
        $user = Product::findOrFail($id);
        $user->name = $data['name'];
        $user->image = $data['image'];
        $user->category_id = $data['category_id'];
        $user->description = $data['description'];
        $user->price = $data['price'];
        $user->status = $data['status'];
        $user->save();

        return $user;
    }

    public function delete($id)
    {
        return Product::findOrFail($id)->delete();
    }

    public function search(Request $request)
    {
        $name = $request->input('name');
        $c_type = $request->c_type;
        $sort_price = $request->sort_price;
        $sort_sold = $request->sort_sold;
        $products = Product::query()
                            ->with('category')
                            ->select('products.*',DB::raw('SUM(order_detail.quantity) as sold'))
                            ->leftJoin('order_detail','order_detail.product_id','=','products.id')
                            ->groupBy('products.id');

        // nếu name tồn tại thì add query
        if ($name != "") {
            $products->where('name', 'LIKE', '%'.$name.'%')->orderBy('updated_at', 'DESC');
        }

        // nếu category tồn tại thì add query
        if ($c_type != "" || $c_type != NULL) {
            $products ->where('category_id', '=', $c_type)->orderBy('updated_at', 'DESC');
        }

        // nếu orderBy tồn tại thì add query
        if ($sort_price != "" || $sort_price != NULL) {
            if ($sort_price == config('constants.sort.asc')) {
                $products ->orderBy('price', 'ASC');
            } else {
                $products ->orderBy('price', 'DESC');
            }
        }

        if ($sort_sold != "" || $sort_sold != NULL) {
            if ($sort_sold == config('constants.sort.asc')) {
                $products->orderBy('sold', 'ASC');
            } else {
                $products ->orderBy('sold', 'DESC');
            }
        }
        $products = $products->paginate(config('constants.paginate.paginate_admins'));
        $products->appends(['name'=> $name,'c_type'=>$c_type,'sort_price'=>$sort_price,'sort_sold'=>$sort_sold]);

        return $products;
    }
}
