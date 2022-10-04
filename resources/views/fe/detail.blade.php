@include('fe.components.header')
<!-- Product Details Section Begin -->
<section class="product-details spad">
    <div class="container">
        <div class="row" style="border:1px solid;">
            <div class="col-lg-3 col-md-6">
                <div class="product__details__pic">
                    <div class="product__details__pic__item">
                        <img class="product__details__pic__item--large" src="{{asset($products->image)}}" alt="" style="margin-top:37px; margin-left:35px; max-width: 75%;">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="product__details__text">
                    <h3 style="margin-top:32px;">{{$products->name}}</h3>
                    <h6>
                        @if ($products->sold >= 1)
                            {{$products->sold}} sold
                        @else
                            0 Sold
                        @endif
                    </h6>
                    <div class="product__details__price">{{number_format($products->price,0,',','.')}} VNĐ</div>
                    <p style="margin-bottom:30px;">Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
                        vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                        quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                    {{-- <button class="button">BUY NOW</button> --}}
                    <!-- Button trigger modal -->
                    <button type="button" class="" data-toggle="modal" data-target="#exampleModal" style="border-radius:20px;">
                        BUY NOW
                    </button>
                    @include('fe.cart')
                </div>
            </div>
            <div class="share" style="margin-left:33px;margin-bottom:10px;">Share:
                <i class="fab fa-twitter" style="font-size:20px;"></i>
                <i class="fab fa-facebook" style="font-size:20px;"></i>
                <i class="fab fa-facebook-messenger" style="font-size:20px;"></i>
            </div>
        </div>
    </div>

</section>
<!-- Product Details Section End -->

<!-- Related Product Section Begin -->
<section class="related-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title related__product__title" style="text-align: left;">
                    <h2>Related Product</h2>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- @dd($relateProduct) --}}
            @foreach ($relateProduct as $items)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="featured__item">
                    <div class="featured__item__pic set-bg" data-setbg="{{asset($items->image)}}" style="width:212px; height:270px;">

                    </div>
                    <div class="featured__item__text" >
                        <span><a href="{{route('fe.productDetail', ['id' => $items->id])}}" style="float: left; color:black !important;">{{$items->name}}</a></span><br>
                        <span style="float: left;">{{number_format($items->price,0,',','.')}} VNĐ</span><br>
                        <span style="float: left;margin-right:52px;">
                            @if ($items->sold >=  1)
                                {{$items->sold}} Sold
                            @else
                                0 Sold
                            @endif
                        </span>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
    {{-- <button class="button" style="border: 1px solid;border-color: silver;background: white;border-radius: 3px;margin-left:728px;">See more</button> --}}
    <a href="{{route('fe.search', ['category_id'=>$products->category_id])}}" ><button style="border: 1px solid; border-color: silver; background: white; border-radius: 3px; margin-left:719px;">See more</button></a>
    <hr>
<!-- Related Product Section End -->
@include('fe.components.footer')
