@extends('cms.layout.layout')
@section('content-main')
@section('statistic_month', 'active')
    <div>
        <style>
            .inner{
                text-align: center;
            }
        </style>
        <span style="font-size: 40px; margin-left: 15px;">{{__('dashboard.name.dashboard')}}</span><hr>
        <form action="{{ route('cms.dashboard.statistic_month')}}" method="get">
            <div id="date-picker-example" class="md-form md-outline input-with-post-icon datepicker" inline="true" style="margin-left: 10px; display:flex;">
                <span style="margin-top: 10px; margin-left: 5px; margin-right: 5px; font-size: 17px;">&ensp;{{__('dashboard.search.dashboard.from_date')}}</span>
                <input name="date_from" value="{{$data['start']->format('Y-m-d')}}" placeholder="Select date" type="date" id="example" class="form-control" style="width: 200px; height:28px; margin-left: 10px; margin-top: 6px;">
                <span style="margin-top: 10px; margin-left: 5px; margin-right: 5px; font-size: 17px;">&ensp;{{__('dashboard.search.dashboard.to_date')}}</span>
                <input name="date_to" value="{{$data['end']->format('Y-m-d')}}" placeholder="Select date" type="date" id="example" class="form-control" style="width: 200px; height: 28px; margin-left: 10px; margin-top: 6px;">
                <button type="submit" style="margin-left: 20px; width: 100px; height: 30px; margin-top: 4px; background-color: white; border: 1px solid; border-radius: 5px;">{{__('dashboard.button.apply')}}</button>
            </div>
        </form>
        <br>

        @if(Session::has('alert'))
        <div class="alert alert-danger alert-dismissible" style="width: 368px; height: 50px; margin-left: 20px;">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('alert')}}
        </div>
        @endif
        {{-- <div style="text-align: center;">
            <span style="font-size: 20px; font-weight: 600;">Statistic from {{$data['start']->format('d/m/Y')}} to {{$data['end']->format('d/m/Y')}} in {{$data['month']}}</span>
        </div> --}}
        <section class="content">
            <!-- Small boxes (Stat box) -->
            <div class="row" style="margin-left: 85px;">
              <div class="col-lg-3 col-xs-6" style="margin-left: 37px">
                <!-- small box -->
                <div class="small-box bg-aqua" style="width: 360px; height: 160px; border-radius: 25px">
                  <div class="inner">
                    <p style="margin-top: 13px;">{{__('dashboard.dashboard.statistic.month.order.name')}} {{$data['month']}}</p>
                    <h3 style="marin-top: 15px; margin-left:18px;">{{ $data['count_order']}} {{__('dashboard.dashboard.statistic.month.order.property')}}</h3>
                  </div>
                </div>
              </div>
              <!-- ./col -->
              <div class="col-lg-3 col-xs-6" style="margin-left: 65px;">
                <!-- small box -->
                <div class="small-box bg-green" style="margin-left: 65px; width: 540px; height: 160px; border-radius: 25px">
                  <div class="inner">
                    <p style="margin-top: 13px;">{{__('dashboard.dashboard.statistic.month.total.name')}} {{$data['month']}}</p>
                    {{-- <h3>1.000.000.000.000 VNĐ</h3> --}}
                    <h3>{{number_format($data['count_amount'],0,',','.')}} VNĐ</h3>
                  </div>
                </div>
              </div>
              <!-- ./col -->
            </div>
            <div class="row" style="margin-top: 25px; margin-left: 119px;">
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-yellow" style="width: 280px; height: 145px; border-radius: 25px">
                      <div class="inner">
                        <p style="margin-top: 13px;">{{__('dashboard.dashboard.statistic.month.user.name')}}</p>
                        <h3>{{$data['count_user']}} {{__('dashboard.dashboard.statistic.month.user.property')}}</h3>
                      </div>
                    </div>
                </div>
                <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-red" style="width: 280px; height: 145px; margin-left: 58px; border-radius: 25px">
                      <div class="inner">
                        <p style="margin-top: 13px;">{{__('dashboard.dashboard.statistic.month.product.name')}}</p>
                        <h3>{{$data['count_product']}} {{__('dashboard.dashboard.statistic.month.product.property')}}</h3>
                      </div>
                    </div>
                </div>
                  <!-- ./col -->
                <div class="col-lg-3 col-xs-6">
                    <!-- small box -->
                    <div class="small-box bg-orange" style="width: 280px; height: 145px; margin-left: 112px; border-radius: 25px">
                      <div class="inner">
                        <p style="margin-top: 13px;">{{__('dashboard.dashboard.statistic.month.category.name')}}</p>
                        <h3>{{$data['count_categories']}} {{__('dashboard.dashboard.statistic.month.category.property')}}</h3>
                      </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->
        </section>
    </div>
@endsection
