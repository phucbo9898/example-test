@extends('cms.layout.layout')
@section('content-main')
@section('user', 'active')
    @if (session('error'))
        <br>
        <div class="alert alert-danger text-center" style="width:500px; margin-left:5px;">{{session('error')}}</div>
    @endif
    <span style="font-size: 40px; margin-left:15px;">{{$data->name}} Info</span>
    <hr>
    <div class="container">
        <div>
            <span class="infor">User name</span> &ensp;
            <label for="" class="inforVal">{{$data->name}}</label>
        </div>
        <div>
            <span class="infor">User email</span> &ensp;
            <label for="" class="inforVal">{{$data->email}}</label>
        </div>
        <div>
            <span class="infor">Type</span> &ensp;
            <label for="" style="" class="inforType">{{$data->role == config('constants.role.cms_user') ? 'CMS user' : 'Front-end user'}}</label>
        </div>
    </div> <br>
    <br>
    <br>
    <a href="{{route('cms.user.index')}}" style="text-decoration: none; color: white; margin-left:140px;" class="btn btn-danger" >Back</a>
@endsection
