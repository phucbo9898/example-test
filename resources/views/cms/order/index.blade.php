@extends('cms.layout.layout')
@section('content-main')
@section('order', 'active')
    <span style="font-size: 40px; margin-left: 15px;">Order List</span> <hr>
    <form action="{{route('cms.search.order')}}" method="get">
        <div style="display: flex; margin-left: 20px;">
            <div>
                <span>Product name</span><br>
                <input type="text" name="name" placeholder="Search name">
            </div>
            <div style="margin-left: 30px;">
                <span>Status</span><br>
                <select name="status_order" id="" style="height: 27px;">
                    <option value="">choose type</option>
                    @foreach ($status as $key => $values)
                        <option value="{{$values->status}}">
                            @switch($values->status)
                                @case(config('constants.status.new'))
                                    <span>New</span>
                                    @break
                                @case(config('constants.status.in_progress'))
                                    <span>In progress</span>
                                    @break
                                @case(config('constants.status.buyer_cancel'))
                                    <span>Buyer cancel</span>
                                    @break
                                @case(config('constants.status.admin_cancel'))
                                    <span>Admin cancel</span>
                                    @break
                                @default
                                    <span>Done</span>
                            @endswitch
                        </option>
                    @endforeach
                </select>
            </div>
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true" style="margin-left: 10px; margin-top: -5px;">
                <label for="" style="font-weight: 100 !important;">From</label>
                <input name="date_from" placeholder="Select date" type="date" id="example" class="form-control" style="margin-top: -4px; height: 28px;">
            </div>
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true" style="margin-left: 10px; margin-top: -5px;">
                <label for="" style="font-weight: 100 !important;">To</label>
                <input name="date_to" placeholder="Select date" type="date" id="example" class="form-control" style="margin-top: -4px; height: 28px;">
            </div>
            <button type="submit" style="margin-left: 30px; width: 90px; height: 30px; margin-top: 20px;">search</button>
        </div>
        <select class="pagin" name="" id="">
            <option value="10" {{($limit == 10 ? 'selected' : '')}}>10</option>
            <option value="20" {{($limit == 20 ? 'selected' : '')}}>20</option>
            <option value="30" {{($limit == 30 ? 'selected' : '')}}>30</option>
        </select>
    </form>
    <a href="{{route('cms.order.export_all')}}" class="btn btn-success" style="margin-right: 10px; float: right;"><i class="fas fa-print"></i>&ensp;Export excel</a>
    <!-- Alert message change status -->
    @if(Session::has('success-done'))
    <div class="alert alert-success alert-dismissible" style="width: 275px; height: 50px; margin-left: 20px; margin-top: 20px;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('success-done')}}
    </div>
    @endif
    <!-- -->
    <table id="dt-select" class="table table-striped table-bordered" cellspacing="0" style="margin-left: 30px; margin-top: 10px;">
        <tr>
            <table cellspacing="0" border="1" rules="all" style="width: 100%; border: 1px solid; margin-top: 20px;">
                <tr style="height: 45px;">
                    <th width="5%" style="text-align: center; border: 1px solid;">No</th>
                    <th width="10%" style="text-align: center; border: 1px solid;">Product image</th>
                    <th width="20%" style="text-align: center; border: 1px solid;">Product name</th>
                    <th width="15%" style="text-align: center; border: 1px solid;">Buyer</th>
                    <th width="10%" style="text-align: center; border: 1px solid;">Quantity</th>
                    <th width="10%" style="text-align: center; border: 1px solid;">Status</th>
                    <th width="10%" style="text-align: center; border: 1px solid;">Buy at</th>
                    <th width="10%" style="text-align: center; border: 1px solid;">Updated at</th>
                    <th width="10%" style="text-align: center; border: 1px solid;">Action</th>
                </tr>
            </table>
        </tr>
        <tr>
            <table cellspacing="0" border="1" style="width: 100%; border: 1px solid;" rules="cols">
                @foreach ($orders as $key => $items)
                <tr style="height: 65px;">
                    <td style="text-align:center;width:5%;">{{($orders->currentPage() - 1) * $orders->perPage() + $loop->index + 1}}</td>   <!-- $key = $loop->index -->
                    <td style="width: 10%;"><img src="{{$items->image_product}}" alt="" style="width: 50px; margin: auto; display: block;"></td>
                    <td style="width: 20%;">&ensp;{{$items->name_product}}</td>
                    <td style="width: 15%;">&ensp;{{$items->fullname}}</td>
                    <td style="width: 10%;">&ensp;{{$items->qty}}</td>
                    <td style="text-align:center;width:10%;">
                        @switch($items->status)
                            @case(config('constants.status.new'))
                                <button type="button" class="btn btn-primary" style="width: 105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#cece3d;" width="105px">New</button>
                                @break
                            @case(config('constants.status.in_progress'))
                                <button type="button" class="btn btn-primary" style="width: 105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#c5c5bf">In progress</button>
                                @break
                            @case(config('constants.status.buyer_cancel'))
                                <button type="button" class="btn btn-warning" style="width: 105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#c5c5bf">Buyer cancel</button>
                                @break
                            @case(config('constants.status.admin_cancel'))
                                <button type="button" class="btn btn-danger" style="width: 105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#ea3250;">Admin cancel</button>
                                @break
                            @default
                                <button type="button" class="btn btn-success" style="width: 105px; border-radius: 50%; border-color: rgb(19, 19, 19); background-color:#3dce47;">Done</button>
                        @endswitch
                    </td>
                    <td style="width: 10%;">&ensp;{{date("Y/m/d H:i", strtotime($items->created_at))}}</td>
                    <td style="width: 10%;">&ensp;{{date("Y/m/d H:i", strtotime($items->updated_at))}}</td>
                    <td style="text-align: center;">
                        <a class="btn btn-info" href="{{route('cms.order.show', ['order'=>$items->id])}}"><i class="fa fa-eye"></i></a>
                    </td>
                </tr>
                @endforeach
            </table>
        </tr>
    </table>
    <div class="text-xs-center">
        {{$orders->links()}}
    </div>
    <script type="text/javascript">
        // Data Picker Initialization
        // $('.datepicker').datepicker({
        // inline: true
        // });
        let maxElementInPageSelect = document.getElementsByClassName("pagin")[0];
        let urlNew = '';
        maxElementInPageSelect.addEventListener('change', function() {
            let urlCurrent = window.location.href
            if (urlCurrent.includes("?")) {
                urlNew = urlCurrent + '&limit=' + maxElementInPageSelect.value
            } else {
                urlNew = urlCurrent + '?limit=' + maxElementInPageSelect.value
            }
            window.location.href = urlNew
        });
    </script>
@endsection
