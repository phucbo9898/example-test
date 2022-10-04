@extends('cms.layout.layout')
@section('content-main')
@section('category', 'active')
    @if (session('error'))
        <br>
        <div class="alert alert-danger text-center" style="width: 500px; margin-left: 5px;">{{ session('error')}}</div>
    @endif
    <span style="font-size: 40px; margin-left: 15px;">{{$data->name}} Info</span> <hr>
    <div class="container">
        <form role="form" action="" method="post" enctype="multipart/form-data" style="font-size: 17px;">
            <div>
                <span>Category name: </span>
                <label for="" style="margin-left: 20px;">{{$data->name}}</label>
            </div>
            <div style="margin-top: 20px;">
                <a class="btn btn-danger" href="{{route('cms.category.index')}}" style="text-decoration: none; color: white;">Back</a>
                <button class="btn btn-success" disabled style="margin-left: 20px; opacity: 0 !important">Save</button>
            </div>
        </form>
    </div>
@endsection
