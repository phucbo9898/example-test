@extends('cms.layout.layout')
@section('content-main')
@section('product', 'active')
    <span style="font-size: 40px; margin-left:15px;">{{$data->name_product}} Info</span> <hr>
    <div class="container">
        <table cellspacing="0" border="0" style="width:50%; border: 1px ;" >
            <tr style="font-size: 25px;">
                <td style="height: 55px; width:195px;">Product name:</td>
                <td>{{$data->name_product}}</td>
            </tr>
            <tr style="font-size: 25px;">
                <td style="height: 55px; width:195px;">Category:</td>
                <td>{{$data->name_category}}</td>
            </tr>
            <tr style="font-size: 25px;">
                <td style="height: 55px; width:195px;">Image:</td>
                <td><img src="{{asset($data->image)}}" alt="" style="width:16%;"></td>
            </tr>
            <tr style="font-size: 25px;">
                <td style="height: 55px; width:195px;">Price:</td>
                <td>{{number_format($data->price,0,',',',')}} VNĐ</td>
            </tr>
            <tr style="font-size: 25px;">
                <td style="height: 55px; width:195px;">Description:</td>
                <td>{{$data->description}}</td>
            </tr>
            <tr style="font-size: 25px;">
                <td style="height: 55px; width:195px;">Status:</td>
                <td>{{$data->status == config('constants.product.status.active') ? 'active' : 'inactive'}}</td>
            </tr>
        </table>
        <div style="margin-top: 20px;">
            <a href="{{route('cms.product.index')}}" class="btn btn-danger" style="text-decoration: none; color: white;">Back</a>
            <button class="btn btn-success" disabled style="margin-left: 20px; opacity: 0 !important">Save</button>
        </div>
    </div>
@endsection
