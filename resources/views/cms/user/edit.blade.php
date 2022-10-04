@extends('cms.layout.layout')
@section('content-main')
    <span style="font-size: 40px; margin-left:15px;"> Update User - </span> <span style="font-size: 30px; font-style: italic;">{{$data->name}}</span> <hr>
    <div class="container">
        <form role="form" action="{{ route('cms.user.update', ['user'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label>User name:</label>
                <input type="text" name="name" required value="{{$data->name}}" style="width:300px; margin-left:51px;">
                <br>
                @if ($errors->has('name'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('name')}}</label>
                @endif
            </div>
            <div style="margin-top: 10px;">
                <div style="display:flex;">
                    <label>User image: </label>
                    <input type="file" name="new_image" required style="width:500px; margin-left:52px;">
                </div>
                <!-- Hiển thị ảnh cũ -->
                <img src="{{asset($data->image)}}" width="200px" alt="" style="margin-left:123px;margin-top:5px;">
                <br>
                @if ($errors->has('image'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('image')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <label>User email:</label>
                <input type="text" name="email" required  value="{{$data->email}}" style="width:300px;margin-left:51px;">
                <br>
                @if ($errors->has('email'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('email')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <label>Password:</label>
                <input type="password" name="password" required  style="width:300px; margin-left:57px;" value="">
                <br>
                @if ($errors->has('password'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('password')}}</label>
                @endif
            </div>
            <div style="margin-top: 30px;">
                <label for="">Type</label>
                <select name="role" style="margin-left:93px; height:25px;">
                    @foreach ($role as $key => $values)
                        <option {{$values->role == $data->role ? 'selected' : ''}} value="{{$values->role}}">
                            {{$values->role == config('constants.role.cms_user') ? 'CMS user' : 'Front-end user'}}
                        </option>
                    @endforeach
                </select>
            </div>
            <div style="margin-left: 60px; margin-top: 50px;">
                <a class="btn btn-danger" href="{{route('cms.user.index')}}" style="text-decoration: none;
                    color: white;">Back</a>
                <button class="btn btn-success" style="margin-left: 415px;">Save</button>
            </div>
        </form>
    </div>
@endsection
