<?php

namespace App\Http\Controllers\cms;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Repositories\Product\ProductRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class ProductController extends Controller
{
    public $productRepository;

    public function __construct(ProductRepositoryInterface $productRepository)
    {
        $this->productRepository = $productRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = $this->productRepository->getAll();
        $name_category = DB::table('categories')->whereNull('deleted_at')->distinct()->get();

        return view('cms.product.index', compact('products','name_category'));
    }

    public function search(Request $request)
    {
        $name_category = DB::table('categories')->whereNull('deleted_at')->distinct()->get();
        $products = $this->productRepository->search($request);

        return view('cms.product.search',compact('products','name_category'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = DB::table('products')->get();
        $category_name = Category::distinct()->get();
        $status = DB::table('products')->distinct()->get(['status']);

        return view('cms.product.create', compact('status','category_name', 'status'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'required|integer',
                'description' => 'required',
                'status' => 'required',
                'category_id' => 'required|not_in:0'
            ]);

            $data = $request->all();

            if($request->hasFile('image')){     // image
                $file = $request->file('image');
                $filename = Carbon::now()->toDateString().'_'.$file->getClientOriginalName();
                $path_upload = 'upload/';
                $file->move($path_upload,$filename);

                $data['image'] = $path_upload.$filename;
            }
            $this->productRepository->store($data);
        } catch (ModelNotFoundException $exception) {
            $this->categoryRepository->logMsg($exception);

            return redirect()->route('cms.product.index');
        }

        if (!is_null($data)) {
            return redirect()->route('cms.product.index')->with('success-add', 'Success! Product added');
        } else {
            return redirect()->route('cms.product.index')->with('error-add', 'Error! Could not added product category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = $this->productRepository->find($id);
        } catch (ModelNotFoundException $exception) {
            $this->productRepository->logMsg($exception);

            return redirect()->route('cms.product.index');
        }
        return view('cms.product.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->productRepository->edit($id);
        $status = DB::table('products')->distinct()->get(['status']);
        $category = Category::all();

        return view('cms.product.edit', compact('data', 'status', 'category'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                'price' => 'required|integer'
            ]);

            $data = $request->all();

            if($request->hasFile('new_image')){
                @unlink(public_path($data->image));
                $file = $request->file('new_image');
                $filename = Carbon::now()->toDateString().'_'.$file->getClientOriginalName();
                $path_upload = 'upload/product/';
                $file->move($path_upload,$filename);
                $data['image'] = $path_upload.$filename;
            }
            $this->productRepository->update($id, $data);

        } catch (ModelNotFoundException $exception) {
            $this->categoryRepository->logMsg($exception);

            return redirect()->route('cms.product.index');
        }

        if (!is_null($data)) {
            return redirect()->route('cms.product.index')->with('success-update', 'Success! Product updated');
        } else {
            return redirect()->route('cms.product.index')->with('error-update', 'Error! Could not updated product category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->productRepository->delete($id);
        
        return redirect()->back();
    }

}
