<?php

namespace App\Repositories\Category;

use App\Models\Category;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class CategoryRepository extends BaseRepository implements CategoryRepositoryInterface
{
    public function getModel()
    {
        return Category::class;
    }

    public function getAll()
    {
        return Category::with('user')->orderBy('updated_at', 'DESC')->paginate(config('constants.paginate.paginate_admins'));
    }

    public function find($id)
    {
        return Category::findOrFail($id);
    }

    public function store(array $data)
    {
        $user = new Category();
        $user->name = $data['name'];
        $user->slug = Str::slug($data['name']);
        $user->user_id = auth()->user()->id;
        $user->save();

        return $user;
    }

    public function edit($id)
    {
        return Category::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $user = Category::findOrFail($id);
        $user->name = $data['name'];
        $user->slug = Str::slug($data['name']);
        $user->user_id = auth()->user()->id;
        $user->save();

        return $user;
    }

    public function delete($id)
    {
        return Category::findOrFail($id)->delete();
    }

    public function search(Request $request)
    {
        $search = $request->input('keyword');
        if ($search != "") {
            $categories = Category::query()
                    ->where('name', 'LIKE', "%{$search}%")
                    ->orderBy('updated_at', 'DESC')
                    ->paginate(config('constants.paginate.paginate_admins'));
            $categories->appends(['keyword'=> $search]);
        } else {
            $categories = Category::orderBy('updated_at', 'DESC')->paginate(config('constants.paginate.paginate_admins'));
        }
      
        return $categories;
    }
}
