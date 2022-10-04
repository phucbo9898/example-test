@extends('cms.layout.layout')
@section('content-main')
@section('category', 'active')
    <span style="font-size: 40px; margin-left:15px;">Update {{$data->name}}</span> <hr>
    <div class="container">
        <form role="form" action="{{route('cms.category.update', ['category'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label>Category name:</label>
                <input type="text" name="name" placeholder="Nhập tên danh mục" style="width:500px; margin-left:20px;" value="{{$data->name}}">
                <br>
                @if ($errors->has('name'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('name')}}</label>
                @endif
            </div>
            <div style="margin-left: 60px; margin-top: 50px;">
                <a class="btn btn-danger" href="{{route('cms.category.index')}}" style="text-decoration: none;
                    color: white;">Back</a>
                <button class="btn btn-success" style="margin-left: 510px;">Save</button>
            </div>
        </form>
    </div>
@endsection
