@extends('cms.layout.layout')
@section('content-main')
@section('statistic_month', 'active')
    <span style="font-size: 40px; margin-left: 15px;">{{__('dashboard.name.dashboard')}}</span><hr>
    <form action="" method="get">
        <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true" style="margin-left: 10px; display: flex;">
            <span style="margin-top: 10px; margin-left: 5px; margin-right: 5px; font-size: 17px;">&ensp;{{__('dashboard.search.dashboard.from_date')}}</span>
            <input name="date_from" value="{{$date_from}}" type="date" id="example" class="form-control" style="width: 200px; height: 28px; margin-left: 10px; margin-top: 6px;">
            <span style="margin-top: 10px; margin-left: 5px; margin-right: 5px;">&ensp;To</span>
            <input name="date_to" value="{{$date_to}}" type="date" id="example" class="form-control" style="width: 200px; height: 28px; margin-left: 10px; margin-top: 6px;">
            <button type="submit" style="margin-left: 20px; width: 100px; height: 30px; margin-top: 4px; background-color: white; border: 1px solid; border-radius: 5px;">Apply</button>
        </div>
    </form>
    <br>
    @if(Session::has('alert'))
        <div class="alert alert-danger alert-dismissible" style="width: 368px; height: 50px; margin-left: 20px;">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('alert')}}
        </div>
    @endif
    <section class="content">
        <!-- Small boxes (Stat box) -->
        <div class="row" style="margin-left:85px;">
          <div class="col-lg-3 col-xs-6" style="margin-left: 37px">
            <!-- small box -->
            <div class="small-box bg-aqua" style="width: 360px; height: 160px; border-radius: 25px">
              <div class="inner" style="display: grid;"> <br>
                <span style="margin: 0 auto; font-size: 18px;">
                    Total number of orders
                </span>
                <span style="font-weight: bold; font-size: 36px; text-align: center; margin: 0 auto; display: block;">{{$count_order}} orders</span>
              </div>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-xs-6" style="margin-left: 65px;">
            <!-- small box -->
            <div class="small-box bg-green" style="margin-left: 65px;
            width: 540px; height: 160px; border-radius: 25px">
              <div class="inner" style="display: grid;"> <br>
                <span style="margin:0 auto; font-size: 18px;">
                    Total amount
                </span>
                {{-- <h3>1.000.000.000.000 VNĐ</h3> --}}
                <span style="font-weight: bold; font-size: 36px; text-align: center; margin: 0 auto; display: block;">{{number_format($count_amount,0,',','.')}} VNĐ</span>
              </div>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <div class="row" style="margin-top: 25px;margin-left:119px;">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-yellow" style="width: 280px; height: 145px; border-radius: 25px">
                  <div class="inner" style="display:grid;"> <br>
                    <span style="margin: 0 auto; font-size: 18px;">Total number of User</span>
                    <span style="font-weight: bold; font-size: 36px; text-align: center; margin: 0 auto; display: block;">{{$count_user}} users</span>
                  </div>
                </div>
            </div>
              <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red" style="width: 280px; height: 145px; margin-left: 58px; border-radius: 25px">
                  <div class="inner" style="display: grid;"> <br>
                    <span style="margin: 0 auto; font-size: 18px;">Total number of products</span>
                    <span style="font-weight: bold; font-size: 36px; text-align: center; margin: 0 auto; display: block;">{{$count_product}} products</span>
                  </div>
                </div>
            </div>
              <!-- ./col -->
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-orange" style="width: 280px; height: 145px; margin-left: 112px; border-radius: 25px">
                  <div class="inner" style="display: grid;"> <br>
                    <span style="margin: 0 auto; font-size: 18px;">Total number of categories</span>
                    <span style="font-weight: bold; font-size: 36px; text-align: center; margin: 0 auto; display: block;">{{$count_categories}} categories</span>
                  </div>
                </div>
            </div>
        </div>
        <!-- /.row -->
    </section>
@endsection
