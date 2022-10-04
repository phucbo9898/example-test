{{-- @extends('fe/components/main') --}}
@extends('fe.components.main')
@section('content-main')
{{-- @section('category','active') --}}
    <div class="col-lg-9" >
        {{-- @dd($category->id) --}}
        <form action="" method="get">
            <div style="display:flex; jutify-content: space-between;">
                <div style="display: flex;">
                    <div style="">
                        <span>Price</span> <br>
                        <select name="sort_price" id="" >
                            <option value="" style=""></option>
                            <option value="1" style="">Ascending</option>
                            <option value="2" style="">Descending</option>
                        </select>
                    </div>
                    <div style="margin-left:100px;">
                        <span>Sold</span><br>
                        <select name="sort_sold" id="" >
                            <option value="" style=""></option>
                            <option value="1">Ascending</option>
                            <option value="2">Descending</option>
                        </select>
                    </div>
                    <div style="margin-left:100px;">
                        <span>Created at</span><br>
                        <select name="sort_created_at" id="" >
                            <option value="" style=""></option>
                            <option value="1">Ascending</option>
                            <option selected value="2">Descending</option>
                        </select>
                    </div>
                </div>
                <div style="margin: 30px 180px 10px 100px;">
                    <button type="submit" style="width:90px; border:1px solid; border-color:#d2c7c7; border-radius: 8px; background-color:white;">Apply</button>
                </div>
            </div> <hr>
        </form>

        <!-- Featured Section Begin -->
        <section class="featured spad" style="padding-top:15px !important; ">
            <div class="container">
                <div class="row featured__filter">
                    @foreach ($products as $items)
                    <div class="col-lg-3 col-md-4 col-sm-6 mix {{$items->category->name}}" style="">
                        <div class="featured__item">
                            <a href="{{route('fe.productDetail', ['id' => $items->id])}}"><img src="{{asset($items->image)}}" alt="" class="featured__item__pic set-bg"></a>
                            <div class="" >
                                <span><a href="{{route('fe.productDetail', ['id' => $items->id])}}" style="color: black !important;">{{$items->name}}</a></span><br>
                                <span style="float: left;">{{number_format($items->price,0,',','.')}} VNĐ</span><br>
                                <span style="float: left;">
                                    @if ($items->sold >= 1)
                                    {{$items->sold}} Sold
                                    @endif
                                </span>
                            </div>
                        </div>
                    </div> <br>
                    @endforeach
                </div> <br>
                <div class="text-xs-center">
                    {{$products->links()}}
                </div>
            </div>
        </section>
        <!-- Featured Section End -->
    </div>
@endsection
