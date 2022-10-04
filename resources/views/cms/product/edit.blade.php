@extends('cms.layout.layout')
@section('content-main')
    <span style="font-size: 40px; margin-left:15px;">Update Product - </span>
    <span style="font-size: 30px; font-style: italic;">{{$data->name}}</span>
    <hr>
    <div class="container">
        <form role="form" action="{{route('cms.product.update', ['product'=>$data->id])}}" method="post" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div>
                <label>Product name: </label>
                <input type="text" name="name" required placeholder="Nhập tên sản phẩm" style="width:500px; margin-left:20px;" value="{{$data->name}}">
                <br>
                @if ($errors->has('name'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('name')}}</label>
                @endif
            </div>
            <div style="margin-top: 10px;">
                <div style="display:flex;">
                    <label>Product image *:</label>
                    <input type="file" name="new_image" required style="width:400px; margin-left:10px;">
                </div>
                {{-- Hiển thị ảnh cũ--}}
                <img src="{{asset($data->image)}}" width="150px" style="margin-left:115px; margin-top:5px;">
                <br>
                @if ($errors->has('image'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('image')}}</label>
                @endif
            </div>
            <div style="margin-top: 10px;">
                <label for="">Category: </label>
                <select name="category_id" style="margin-left:48px; width:500px; height:25px;" required>
                    @foreach ($category as $key => $value)
                        <option {{$value->id == $data->category_id ? 'selected' : ''}} value="{{$value->id}}">
                            {{$value->name}}
                        </option>
                    @endforeach
                </select>
                @if ($errors->has('category_id'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('category_id')}}</label>
                @endif
            </div>
            <div style="margin-top: 10px;">
                <label>Price: </label>
                <input type="text" name="price" required placeholder="Nhập giá sản phẩm" style="width:500px; margin-left:71px;" value="{{$data->price}}">
                <br>
                @if ($errors->has('price'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('price')}}</label>
                @endif
            </div>
            <div style="margin-top: 10px; display:flex;">
                <label>Description: </label>
                <textarea id="summary" name="description" required rows="2"  style="width:500px; height:120px; margin-left:35px;">{{$data->description}}</textarea>
            </div>
            <div style="margin-top: 20px;">
                <label for="">Status *:</label>
                <select name="status" style="margin-left:52px; width:500px; height:25px;" required>
                    @foreach ($status as $key=>$values)
                        <option value="{{$values->status}}" {{$values->status == $data->status ? 'selected' : ''}}>{{$values->status == config('constants.product.status.active') ? 'active' : 'inactive'}}</option>
                    @endforeach
                </select>
                <br>
                @if ($errors->has('status'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('status')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <a class="btn btn-danger" href="{{route('cms.product.index')}}" style="text-decoration: none;
                    color: white; margin-left:55px;">Back</a>
                <button class="btn btn-success" style="margin-left: 510px;">Save</button>
            </div>
        </form>
    </div>
    &ensp;
@endsection
