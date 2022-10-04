@extends('cms.layout.layout')
@section('content-main')
    <span style="font-size: 40px; margin-left:15px;"> Create User</span> <hr>
    <div class="container">
        <form role="form" action="{{route('cms.user.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>User name:</label>
                <input type="text" name="name" placeholder="Nhập user name" style="width:400px; margin-left:35px;">
                <br>
                @if ($errors->has('name'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('name')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <div style="display:flex;">
                    <label>User image: </label>
                    <input type="file" name="image"  style="width:500px; margin-left:34px;">
                </div>
                <br>
                @if ($errors->has('image'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('image')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <label>User email:</label>
                <input type="text" name="email"  placeholder="Nhập user email" style="width:400px; margin-left:35px;">
                <br>
                @if ($errors->has('email'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('email')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <label>Password:</label>
                <input type="text" name="password" placeholder="Nhập password" style="width:400px; margin-left:41px;">
                <br>
                @if ($errors->has('password'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('password')}}</label>
                @endif
            </div>
            <div style="margin-top: 30px;">
                <label for="">Type</label>
                <select name="role" style="margin-left:75px; height:25px;">
                    <option value="">Choose Type</option>
                    <option value="0">CMS user</option>
                    <option value="1">Front-end user</option>
                </select> <br>
                @if ($errors->has('role'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('role')}}</label>
                @endif
            </div>
            <div style="margin-left: 60px; margin-top: 50px;">
                <a class="btn btn-danger" href="{{route('cms.user.index')}}" style="text-decoration: none;
                    color: white;">Back</a>
                <button class="btn btn-success" style="margin-left: 415px;">Save</button>

            </div>
        </form>
    </div>
@endsection
