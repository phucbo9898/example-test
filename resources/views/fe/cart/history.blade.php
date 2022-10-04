@include('fe.components.header')
<style>
    .text-xs-center {
        margin-left: 455px;
    }
    .header__top__right__language:after {
        display: none;
    }
</style>
<h1 style="margin-top: 10px; margin-bottom: 15px; text-align: center; color:blue;">Lịch sử đặt hàng</h1>
<h3 style="margin-right: 50px; text-align: right;">Tổng số đơn đặt hàng: {{$count_order}} đơn hàng</h3>
<table id="example" class="table table-striped table-bordered" style="width:90%; margin-left:100px;">
    <thead>
        <tr>
            <th width="5%" style="text-align:center;">STT</th>
            <th width="8%" style="text-align:center;">Ảnh sản phẩm</th>
            <th width="18%" style="text-align:center;">Tên sản phẩm</th>
            <th width="6%" style="text-align:center;">Số lượng</th>
            <th width="10%" style="text-align:center;">Giá</th>
            <th width="10%" style="text-align:center;">Thành tiền</th>
            <th width="10%" style="text-align:center;">Trạng thái</th>
            <th width="10%" style="text-align:center;">Ngày đặt</th>
            <th width="8%" style="text-align:center;">Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($data as $order)
        <tr>
            <td style="text-align:center;">{{($data->currentPage() - 1) * $data->perPage() + $loop->index + 1}}</td>   <!-- $key = $loop->index -->
            <td style="text-align:center;"><img src="{{ asset($order->image_product)}}" alt="" style="max-width:35%;margin:auto;display:block;"></td>
            <td style="text-align:center;">{{$order->name_product}}</td>
            <td style="text-align:center;">{{$order->quantity}}</td>
            <td style="text-align:center;">{{number_format($order->price,0,',',',')}} VNĐ</td>
            <td style="text-align:center;">{{number_format($order->total,0,',',',')}} VNĐ</td>
            <td style="text-align:center;">
                @switch($order->status)
                    @case(config('constants.status.new'))
                        <button type="button" class="btn btn-primary" style="text-transform: capitalize; width:115px; background-color:#cece3d; font-size:14px;">New</button>
                        @break
                    @case(config('constants.status.in_progress'))
                        <button type="button" class="btn btn-primary" style="text-transform: capitalize; width:115px; background-color:#c5c5bf; font-size:14px;">In progress</button>
                        @break
                    @case(config('constants.status.buyer_cancel'))
                        <button type="button" class="btn btn-warning" style="text-transform: capitalize; width:115px; background-color:#c5c5bf; font-size:14px;">Buyer cancel</button>
                        @break
                    @case(config('constants.status.admin_cancel'))
                        <button type="button" class="btn btn-danger" style="text-transform: capitalize; width:115px; background-color:#ea3250; font-size:14px;">Admin cancel</button>
                        @break
                    @default
                        <button type="button" class="btn btn-success" style="text-transform: capitalize; width:115px; background-color:#3dce47; font-size:14px;">Done</button>
                @endswitch
            </td>
            <td style="text-align:center;">{{date("Y/m/d H:i", strtotime($order->created_at))}}</td>
            <td style="text-align:center;">
                @if ($order->status == config('constants.status.new') )
                    <a href="{{route('fe.order.changeStatus', ['id' => $order->id])}}" class="btn btn-danger" style="text-transform: capitalize; width: 101px; height: 36px; font-size: 14px;">Hủy</a>
                @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@if ($count_order <= 0)
<div>
    <h3 style="margin-top:20px; margin-left:100px;">Tài khoản chưa có đơn hàng nào.</h3>
    <a href="{{ route('fe.home')}}" class="btn btn-warning" style="text-transform: capitalize; width:165px; background-color:#cece3d; font-size:16px; margin-left:100px;">Tiếp tục mua hàng</a>
</div>
@endif
<br><br>
<div class="text-xs-center">
    {{$data->links()}}
</div>
@include('fe.components.footer')
