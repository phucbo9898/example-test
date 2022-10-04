<?php

namespace App\Http\Controllers\cms;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserRepositoryInterface;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class UserController extends Controller
{
    public $userRepository;

    public function __construct(UserRepositoryInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $users = $this->userRepository->getAll();

        return view('cms.user.index', compact('users'));
    }

    public function search(Request $request)
    {
        $role = DB::table('users')->distinct()->get(['role']);
        $users = $this->userRepository->search($request);

        return view('cms.user.search',compact('users','role',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = User::all();

        return view('cms.user.create', compact('data'));
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
                'email'=>'required|email|max:255|unique:users',
                'password'=>'required|min:6',
                'role' => 'required'
            ]);

            $data = $request->all();

            // upload image file
            if($request->hasFile('image')){
                $file = $request->file('image');
                $filename = Carbon::now()->toDateString().'_'.$file->getClientOriginalName();
                $path_upload = 'upload/';
                $file->move($path_upload,$filename);

                $data['image'] = $path_upload.$filename;
            }
            $this->userRepository->store($data);

        } catch (ModelNotFoundException $exception) {
            $this->categoryRepository->logMsg($exception);

            return redirect()->route('cms.user.index');
        }

        if (!is_null($data)) {
            return redirect()->route('cms.user.index')->with('success-add', 'Success! User added');
        } else {
            return redirect()->route('cms.user.index')->with('error-add', 'Error! Could not added user');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        try {
            $data = $this->userRepository->find($id);
        } catch (ModelNotFoundException $exception) {
            $this->categoryRepository->logMsg($exception);

            return redirect()->route('cms.user.index');
        }

        return view('cms.user.view', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = $this->userRepository->edit($id);
        $role = DB::table('users')->distinct()->get(['role']);

        return view('cms.user.edit', compact('data', 'role'));
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
        try {
            $request->validate([
                'name' => 'required|max:255',
                'password'=>'required|min:6',
            ]);

            $data = $request->all();
            if($request->hasFile('new_image')){
                @unlink(public_path($data->image));
                $file = $request->file('new_image');
                $filename = Carbon::now()->toDateString().'_'.$file->getClientOriginalName();
                $path_upload = 'upload/';
                $file->move($path_upload,$filename);
                $data['image'] = $path_upload.$filename;
            }
            if (!empty($data->password)) {
                $data->password = bcrypt($data->password);
            }

            $this->userRepository->update($id, $data);
        } catch (ModelNotFoundException $exception) {
            $this->categoryRepository->logMsg($exception);

            return redirect()->route('cms.user.index');
        }

        if (!is_null($data)) {
            return redirect()->route('cms.user.index')->with('success-update', 'Success! User updated');
        } else {
            return redirect()->route('cms.user.index')->with('error-update', 'Error! Could not updated user');
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $this->userRepository->delete($id);
        
        return redirect()->back();
    }
}
