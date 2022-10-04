<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div style="width:600px;margin-left: 10px;margin-right: 10px;">
        <h1 style="">Hóa đơn bán hàng</h1>
        <div style="display:flex; width: 600px;">
            <div style="width: 450px;">
                <span>Tên khách hàng: {{$data['name']}}</span><br>
                <span>Điện thoại: {{$data['phone']}}</span><br>
                <span>Địa chỉ: Ninh Bình</span>
            </div>
            <div class="img" style="width:100px;">
                <img src="https://firebasestorage.googleapis.com/v0/b/image-a7bcb.appspot.com/o/2022-08-16_naruto.jpg?alt=media&token=07b6df40-3dca-4a74-968d-541930912fc2" alt="" style="width:84%; float: right;">
            </div>
        </div>
        <table border="1" cellspacing="0" cellpadding="0" width="100%" style="border:1px solid;">
            <thead>
                <tr>
                    <th>TT</th>
                    <th>Tên sản phẩm</th>
                    <th>SL</th>
                    <th>Đơn giá</th>
                    <th>Thành tiền</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $stt =1
                @endphp

                <tr>
                    <td style="text-align:center;">{{$stt++}}</td>
                    <td style="text-align:center;">{{$data['name_product']}}</td>
                    <td style="text-align:center;">{{$data['quantity']}}</td>
                    <td style="text-align:center;">{{number_format($data['price'],0,',','.')}} VNĐ</td>
                    <td style="text-align:center;">{{number_format($data['total'],0,',','.')}} VNĐ</td>
                </tr>
            </tbody>
        </table> <br>
        <table width="100%" cellspacing="0" cellpadding="0">
            <tr>
                <td style="width:245px;">Thời gian đặt hàng: {{date('H:i d/m/Y', strtotime($data['time_order']))}}</td>
                <td style="width:115px;">&ensp;</td>
                <td >Phí ship: 0 VNĐ</td>
                <td>&ensp;</td>
            </tr>
            <tr>
                <td>Thời gian giao hàng: {{date('d/m/Y', strtotime($data['delivery_time']))}}</td>
                <td>&ensp;</td>
                <td >Tổng cộng: {{number_format($data['total'],0,',','.')}} VNĐ</td>
                <td>&ensp;</td>
            </tr>
        </table> <br>
        <footer>
            <div style="text-align: center;margin-left:360px;">
                <div><span>Ngày {{$data['day']}} tháng {{$data['month']}} năm {{$data['year']}}</span></div>
                <div><span>Người bán hàng</span></div>
                <br><br>
                <div><span></span></div>
            </div>
        </footer>
    </div>
</body>
</html>
