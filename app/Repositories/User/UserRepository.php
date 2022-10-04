<?php

namespace App\Repositories\User;

use App\Models\User;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;


class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    public function getModel()
    {
        return User::class;
    }

    public function getAll()
    {
        return User::orderBy('updated_at', 'DESC')->paginate(config('constants.paginate.paginate_admins'));
    }

    public function find($id)
    {
        return User::findOrFail($id);
    }

    public function store(array $data)
    {
        $user = new User();
        $user->name = $data['name'];
        $user->image = $data['image'];
        $user->role = $data['role'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']); // mật khẩu
        $user->save();

        return $user;
    }

    public function edit($id)
    {
        return User::findOrFail($id);
    }

    public function update($id, array $data)
    {
        $user = User::findOrFail($id);
        $user->name = $data['name'];
        $user->image = $data['image'];
        $user->role = $data['role'];
        $user->email = $data['email'];
        $user->password = bcrypt($data['password']);
        $user->save();

        return $user;
    }

    public function delete($id)
    {
        return User::findOrFail($id)->delete();
    }

    public function search(Request $request)
    {
        $userName = $request->input('username');
        $type = $request->type;
        $users = User::query()->orderBy('updated_at', 'DESC');

        // nếu tồn tại user name thì add thêm query where user name
        if ($userName != "" ) {
            $users->where(function($query) use ($userName){
                $query->where('name','LIKE', "%{$userName}%");
            });
        }

        //nếu tồn tại type thì add query
        if ($type != "" || $type != NULL) {
            $users ->where('role', '=', $type);
        }
        $users = $users->paginate(config('constants.paginate.paginate_admins'));
        $users->appends(['username'=> $userName,'type'=>$type]);

        return $users;
    }
}
