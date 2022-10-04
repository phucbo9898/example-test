@extends('cms.layout.layout')
@section('content-main')
@section('order', 'active')
    <span style="font-size: 40px; margin-left:15px;">Order Infomation</span>
    <hr>
    @if(Session::has('success-change'))
    <div class="alert alert-success alert-dismissible" style="width: 355px; height: 50px; margin-left: 20px;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('success-change')}}
    </div>
    @endif
    <table style="margin-top:10px; margin-left: 30px; margin-right:20px;" cellspacing="0" width="80%">
        <thead>
            <tr>
                <td width="430px" style="padding:15px">Order ID: {{$data->id}}</td>
                <td>&ensp;</td>
                <td>
                    @switch($data->status)
                        @case(config('constants.status.new'))
                            <button type="button" class="btn btn-primary" style="width:105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#cece3d;" width="105px">New</button>
                            @break
                        @case(config('constants.status.in_progress'))
                            <button type="button" class="btn btn-primary" style="width:105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#c5c5bf">In progress</button>
                            @break
                        @case(config('constants.status.buyer_cancel'))
                            <button type="button" class="btn btn-warning" style="width:105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#c5c5bf">Buyer cancel</button>
                            @break
                        @case(config('constants.status.admin_cancel'))
                            <button type="button" class="btn btn-danger" style="width:105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#ea3250;">Admin cancel</button>
                            @break
                        @default
                            <button type="button" class="btn btn-success" style="width:105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#3dce47;">Done</button>
                    @endswitch
                </td>
            </tr>
            <tr>
                <td style="padding:15px">Buyer: {{$data->fullname}}</td>
                <td>Amount: {{number_format($amount,0,',','.')}} VNĐ</td>
                {{-- <td>Amount: {{ number_format($data->total,0,',','.')}} VNĐ</td> --}}
                <td>&ensp;</td>
            </tr>
            <tr>
                <td style="padding:15px">Buy at: {{$data->created_at->format('Y/m/d H:i')}}</td>
                <td>Update at: {{$data->updated_at->format('Y/m/d H:i')}}</td>
                <td>&ensp;</td>
            </tr>
            @if ($data->status == config('constants.status.new'))
            <tr>
                <td style="padding:15px"> Change status order:</td>
                <td>
                    <style>
                        /* .modal {
                            margin-top:275px;
                        } */
                        .buy{
                            width: 190px;
                            display: block;
                            margin: 0 auto;
                            border: 1px solid;
                            border-color: #bbb6b0;
                        }
                        .pro-qty input {
                            border: 1px solid;
                            height: 80%;
                        }
                        .pro-qty .qtybtn{
                            border: 1px solid;
                        }
                    </style>
                    <button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="border-radius:20px; border:1px solid silver;">
                        Change
                    </button>
                    <!-- Modal -->
                    <form action="{{route('cms.order.changeStatus', ['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Change status order</h5>
                                </div><br>
                                <div class="modal-body">
                                    <div>
                                        <span>
                                            Status:
                                            <select name="change_status" id="">
                                                <option value=""> Choose status</option>
                                                <option value="1"> In progress</option>
                                                <option value="2"> Buyer cancel</option>
                                                <option value="3"> Admin cancel</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                  <button type="submit" class="buy">Change</button> <br>
                              </div>
                            </div>
                        </div>
                    </form>
                    <!-- Modal -->
                </td>
            </tr>
            @elseif ($data->status == config('constants.status.in_progress'))
            <tr>
                <td style="padding:15px"> Change status order:</td>
                <td>
                    <style>
                        /* .modal {
                            margin-top:275px;
                        } */
                        .buy{
                            width: 190px;
                            display: block;
                            margin: 0 auto;
                            border: 1px solid;
                            border-color: #bbb6b0;
                        }
                        .pro-qty input {
                            border: 1px solid;
                            height: 80%;
                        }
                        .pro-qty .qtybtn{
                            border: 1px solid;
                        }
                    </style>
                    <button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="border-radius:20px; border:1px solid silver;">
                        Change
                    </button>
                    <!-- Modal -->
                    <form action="{{ route('cms.order.changeStatus',['id'=>$data->id])}}" method="post">
                        @csrf
                        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Change status order</h5>
                                </div><br>
                                <div class="modal-body">
                                    <div>
                                        <span>
                                            Status:
                                            <select name="change_status" id="">
                                                <option value=""> Choose status</option>
                                                <option value="2"> Buyer cancel</option>
                                                <option value="3"> Admin cancel</option>
                                            </select>
                                        </span>
                                    </div>
                                </div>
                                  <button type="submit" class="buy">Change</button> <br>
                              </div>
                            </div>
                        </div>
                    </form>
                    <!-- Modal -->
                </td>
            </tr>
            @endif
        </thead>
    </table>

    <br><br>
    <span style="font-size: 40px; margin-left:15px;">Product Infomation</span> <hr>
    <table style="margin-top:10px; margin-left: 30px; margin-right:20px;" cellspacing="0" width="80%">
        <thead>
            <tr>
                <td width="270px" style="padding:15px">Product name: {{$name_category->name_product}}</td>
                <td width="160px"><img src="{{asset($name_category->image_product)}}" alt="" style="width:50px;"></td>
                <td>Category: {{$name_category->name_category}}</td>
            </tr>
            <tr>
                <td style="padding:15px">Unit Price: {{number_format($name_category->price,0,',',',')}} VNĐ</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
            </tr>
            <tr>
                <td style="padding:15px">Quantity: {{$name_category->quantity}}</td>
                <td>&ensp;</td>
                <td>&ensp;</td>
            </tr>
        </thead>
    </table>
    <div style="display: flex;">
        <a class="btn btn-danger" href="{{route('cms.order.index')}}" style="text-decoration: none;
        color: white; margin-top: 55px; margin-left:115px;">Back</a>
        @if ($data->status == config('constants.status.new') || $data->status == config('constants.status.in_progress'))
            <div style="display: flex;">
                <a class="btn btn-danger" href="{{route('cms.order.adminCancel', ['id' => $data->id])}}" style="text-decoration: none;
                    color: white; margin-top: 55px; margin-left:535px;">Cancel</a>
                <a href="{{route('cms.order.done', ['id' => $data->id])}}" class="btn btn-success" style="margin-top: 55px; margin-left:10px;">Done</a>
            </div>
        @else
            <div style="display: none;">
                <a class="btn btn-danger" href="{{route('cms.order.index')}}" style="text-decoration: none;
                color: white; margin-top: 55px; margin-left:535px;">Cancel</a>
                <button class="btn btn-success" type="submit" style="margin-top: 55px; margin-left:10px;">Done</button>
            </div>
        @endif
    </div>
    <br><br>
@endsection
