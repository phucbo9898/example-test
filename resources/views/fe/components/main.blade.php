    <!-- Header Section Begin -->
    @include('fe.components.header')
    <!-- Header Section End -->
    <br>
    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All categories</span>
                        </div>
                        <ul>
                            <style>
                                .active .category_name {
                                    color: royalblue !important;
                                }
                                .cursor {
                                    display: none;
                                }
                                .active .cursor {
                                    display: block;
                                }
                            </style>
                            {{-- {{ Request::fullUrl() }}
                            {{ Request::path() }} <br> --}}
                            {{-- {{ Request::route('parameter_name')}} --}}
                            {{-- {{ Request::route()->parameter('id')}} --}}
                            @foreach ($categories as $category)
                            {{-- {{$category->id}} --}}
                            {{-- {{ request()->routeIs('fe.filter', ['id'=> $category->id])}} --}}
                                <li class="{{Request::query('category_id') == $category->id ? 'active' : '' }}">
                                    <a style="text-decoration: none; display:flex;"
                                    href="{{route('fe.search')}}?category_id={{$category->id}}{{!empty($sort_price) ? '&sort_price=' . $sort_price : ''}}{{!empty($sort_sold) ? '&sort_sold=' . $sort_sold : ''}}{{!empty($sort_created_at) ? '&sort_created_at=' . $sort_created_at : ''}}"
                                    class="{{$category->name}}">
                                        <span class="category_name" style="width:180px;" >{{$category->name}}</span>
                                        <div class="cursor">
                                            <i class="fa fa-angle-double-left"></i>
                                        </div>
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- content-main start -->
                @yield('content-main')
                <!-- content-main end -->
            </div>
        </div>
    </section>
    <hr>
    <!-- Hero Section End -->

    @include('fe.components.footer')
</body>
</html>
