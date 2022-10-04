@extends('cms.layout.layout')
@section('content-main')
    <span style="font-size: 40px; margin-left:15px;">Create Product </span> <hr>
    <div class="container">
        <form role="form" action="{{ route('cms.product.store')}}" method="post" enctype="multipart/form-data">
            @csrf
            <div>
                <label>Product name *:</label>
                <input type="text" name="name" required placeholder="Nhập tên sản phẩm" style="width:500px; margin-left:20px;"> <br>
                @if ($errors->has('name'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('name')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <div style="display:flex;">
                    <label>Product image *:</label>
                    <input type="file" name="image" required style="width:500px; margin-left:21px;">
                </div>
                @if ($errors->has('image'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('image')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <label for="">Category *:</label>
                <select name="category_id" required style="margin-left:49px; width:500px; height:25px;">
                    <option value="">Choose category</option>
                    @foreach ($category_name as $key=>$values)
                        <option value="{{$values->id}}">{{$values->name}}</option>
                    @endforeach
                </select> <br>
                @if ($errors->has('category_id'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('category_id')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <label>Price *:</label>
                <input type="text" name="price" required placeholder="Nhập giá sản phẩm" style="width:500px; margin-left:73px;">
                <br>
                @if ($errors->has('price'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('price')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <div style="display:flex;">
                    <label>Description *:</label>
                    <textarea id="summary" required name="description" class="" rows="3" placeholder="Nhập mô tả cho sản phẩm" style="width:500px; height:120px; margin-left:37px;"></textarea>
                </div>
                <br>
                @if ($errors->has('description'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('description')}}</label>
                @endif
            </div>
            <div style="margin-top: 20px;">
                <label for="">Status *:</label>
                <select name="status" required style="margin-left:65px; width:500px; height:25px;">
                    <option>Choose status</option>
                    @foreach ($status as $key=>$values)
                        <option value="{{$values->status}}">{{$values->status == config('constants.product.status.active') ? 'active' : 'inactive'}}</option>
                    @endforeach
                </select>
                <br>
                @if ($errors->has('status'))
                    <label class="text-red" style="font-weight: 600; font-size: 15px; margin-top: 5px">&ensp;<i class="fa fa-info"></i> {{$errors->first('status')}}</label>
                @endif
            </div>
            <div style="margin-top: 50px;">
                <a href="{{route('cms.product.index')}}" class="btn btn-danger" style="text-decoration: none;
                    color: white; margin-left:55px;">Back</a>
                <button class="btn btn-success" style="margin-left: 505px;">Save</button>
            </div>
        </form>
    </div>
@endsection
