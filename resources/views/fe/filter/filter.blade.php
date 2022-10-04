{{-- @extends('fe/components/main') --}}
@extends('fe.components.main')
@section('content-main')
{{-- @section('category','active') --}}
    <div class="col-lg-9" >
        {{-- @dd($category->id) --}}
        <form action="{{route('fe.filterSearch', ['id'=>$category_id->id])}}" method="get">
            <div style="display:flex; jutify-content: space-between;">
                <div style="display: flex;">
                    <div>
                        <span>Price</span> <br>
                        <select name="sort_price">
                            <option value="" style=""></option>
                            <option value="1" style="">Ascending</option>
                            <option value="2" style="">Descending</option>
                        </select>
                    </div>
                    <div style="margin-left:100px;">
                        <span>Sold</span><br>
                        <select name="sort_sold">
                            <option value="" style=""></option>
                            <option value="1">Ascending</option>
                            <option value="2">Descending</option>
                        </select>
                    </div>
                    <div style="margin-left:100px;">
                        <span>Created at</span><br>
                        <select name="sort_created_at">
                            <option value="" style=""></option>
                            <option value="1">Ascending</option>
                            <option value="2">Descending</option>
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
                            <a href="{{route('fe.productDetail', ['id'=>$items->id])}}">
                                <div class="featured__item__pic set-bg" data-setbg="{{asset($items->image)}}"></div>
                            </a>
                            <div>
                                <span><a href="{{route('fe.productDetail', ['id' => $items->id])}}" style="color:black; text-decoration: none; overflow-wrap: break-word;">{{ $items->name}}</a></span><br>
                                <span style="float: left; overflow-wrap: break-word;">{{number_format($items->price,0,',','.')}} VNĐ</span><br>
                                <span style="float: left; overflow-wrap: break-word;">
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
