@extends('cms.layout.layout')
@section('content-main')
@section('category', 'active')
    <span style="font-size: 40px; margin-left:15px;">Create Category</span> <hr>
    <div class="container">
        <form role="form" action="{{route('cms.category.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Category name:</label>
                <input type="text" name="name" required placeholder="Nhập tên danh mục" style="width:500px; margin-left:10px;"><br>
                @if ($errors->has('name'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('name') }}</label>
                @endif
            </div>

            <div style="margin-left: 60px; margin-top: 50px;">
                <a class="btn btn-danger" href="{{route('cms.category.index')}}" style="text-decoration: none;
                    color: white;">Back</a></button>
                <button class="btn btn-success" style="margin-left: 495px;">Save</button>
            </div>
        </form>
    </div>

@endsection
