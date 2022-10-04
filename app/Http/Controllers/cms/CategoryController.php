<?php

namespace App\Http\Controllers\cms;

use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Category\CategoryRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public $categoryRepository;

    public function __construct(CategoryRepositoryInterface $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = $this->categoryRepository->getAll();

        return view('cms.category.index', compact('categories'));
    }

    public function search(Request $request)
    {
        $categories = $this->categoryRepository->search($request);

        return view('cms.category.search', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Category::all();

        return view('cms.category.create',['data' => $data]);
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
                // 'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            ]);

            $data = $request->all();

            $this->categoryRepository->store($data);

        } catch (ModelNotFoundException $exception) {
            $this->categoryRepository->logMsg($exception);

            return redirect()->route('cms.category.index');
        }

        if (!is_null($data)) {
            return redirect()->route('cms.category.index')->with('success-add', 'Success! Category added');
        } else {
            return redirect()->route('cms.category.index')->with('error-add', 'Error! Could not added category');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = Category::findOrFail($id);
        } catch (ModelNotFoundException $exception) {
            $this->categoryRepository->logMsg($exception);

            return redirect()->route('cms.category.index');
        }
        return view('cms.category.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->categoryRepository->find($id);

        return view('cms.category.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required|max:255',
            ],[
                'name.required' => 'you have not edited the category name',
                'name.max' => 'Name is over limit 255 characters',
            ]);

            $data = $request->all();
            $this->categoryRepository->update($id, $data);

        } catch (ModelNotFoundException $exception) {
            $this->categoryRepository->logMsg($exception);

            return redirect()->route('cms.category.index');
        }

        if (!is_null($data)) {
            return redirect()->route('cms.category.index')->with('success-update', 'Success! Category updated');
        } else {
            return redirect()->route('cms.category.index')->with('error-update', 'Error! Could not updated category');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::beginTransaction();
        try {
            $this->categoryRepository->delete($id);
            DB::table('products')->where('category_id', $id)->delete();
            DB::commit();
        } catch (ModelNotFoundException $exception) {
            DB::rollback();
            $this->categoryRepository->logMsg($exception);
        }

        return redirect()->back();
    }
}
