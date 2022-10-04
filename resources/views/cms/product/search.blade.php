@extends('cms.layout.layout')
@section('content-main')
@section('product', 'active')
    <span style="font-size: 40px; margin-left:15px;">Product List</span> <hr>
    <form action="" method="get">
        <div style="display: flex; margin-left: 20px;">
            <div>
                <span>Name</span><br>
                <input type="text" name="name" value="{{Request::get('name')}}">
            </div>
            <div style="margin-left: 30px;">
                <span>Category</span><br>
                <select name="c_type" id="" style="height: 27px;">
                    <option value="">None</option>
                    @foreach ($name_category as $key => $values)
                        <option @if (Request::get('c_type') != null){{$values->id == Request::get('c_type') ? 'selected' : ''}} @endif value="{{$values->id}}">{{$values->name}}</option>
                    @endforeach
                    {{-- <option value="2">Inactive</option> --}}
                </select>
            </div>
            <div style="margin-left: 30px;">
                <span>Sort by price</span><br>
                <select name="sort_price" id="" style="width:115px; height: 27px;">
                    <option value="">Choose sort by</option>
                    <option @if (Request::get('sort_price') != null){{Request::get('sort_price') == config('constants.sort.asc') ? 'selected' : ''}} @endif value="1">Ascending</option>
                    <option @if (Request::get('sort_price') != null){{Request::get('sort_price') == config('constants.sort.desc') ? 'selected' : ''}} @endif value="2">Descending</option>
                    {{-- <option value="2">Inactive</option> --}}
                </select>
            </div>
            <div style="margin-left: 30px;">
                <span>Sort by sold number</span><br>
                <select name="sort_sold" id="" style="width:130px; height: 27px;">
                    <option value="">Choose sort by</option>
                    <option @if (Request::get('sort_sold') != null){{Request::get('sort_sold') == config('constants.sort.asc') ? 'selected' : ''}} @endif value="1">Ascending</option>
                    <option @if (Request::get('sort_sold') != null){{Request::get('sort_sold') == config('constants.sort.desc') ? 'selected' : ''}} @endif value="2">Descending</option>
                    {{-- <option value="2">Inactive</option> --}}
                </select>
            </div>
            <button type="submit" style="margin-left: 30px; width: 90px; height: 30px; margin-top: 18px;">search</button>
        </div>
    </form>
    <a href="{{route('cms.product.create')}}" class="btn btn-primary" style="margin-left: 20px; margin-top:20px;">Create new product</a>
    <br><br>

    <!-- Alert Success -->
    @if(Session::has('success-add'))
    <div class="alert alert-success alert-dismissible" style="width: 255px; height: 50px; margin-left: 20px;">
        <button type="button" class="close" data-dismiss="alert">×</button>
        {{Session::get('success-add')}}
    </div>
    @elseif(Session::has('success-update'))
        <div class="alert alert-success alert-dismissible" style="width: 255px; height: 50px; margin-left: 20px;">
            <button type="button" class="close" data-dismiss="alert">×</button>
            {{Session::get('success-update')}}
        </div>
    @endif

    <table id="dt-select" class="table table-striped table-bordered" cellspacing="0" style="margin-left:30px; margin-top:10px;">
        <tr>
            <table cellspacing="0" border="1" rules="all" style="width:95%; border: 1px solid; margin-top:20px; margin-left:30px;">
                <tr style="height: 45px;">
                    <th width="5%" style="text-align:center; border:1px solid;">No</th>
                    <th width="10%" style="text-align:center; border:1px solid;">Product image</th>
                    <th width="15%" style="text-align:center; border:1px solid;">Product name</th>
                    <th width="10%" style="text-align:center; border:1px solid;">Category</th>
                    <th width="10%" style="text-align:center; border:1px solid;">Price</th>
                    <th width="10%" style="text-align:center; border:1px solid;">Sold</th>
                    <th width="10%" style="text-align:center; border:1px solid;">Status</th>
                    <th width="10%" style="text-align:center; border:1px solid;">Updated_at</th>
                    <th width="15%" style="text-align:center; border:1px solid;">Action</th>
                </tr>
            </table>
        </tr>
        <tr>
            <table cellspacing="0" border="1" style="width:95%; border: 1px solid; margin-left:30px;" rules="cols">
                @foreach ($products as $key => $items)
                <tr style="height: 65px;">
                    <td style="text-align:center; width:64.4px;">{{($products->currentPage() - 1) * $products->perPage() + $loop->index + 1}}</td>   <!-- $key = $loop->index -->
                    <td style="width:129px;"><img src="{{ asset($items->image)}}" alt="" style="width:50px; margin:auto; display:block;"></td>
                    <td style="width:193px;">&ensp;{{$items->name}}</td>
                    <td style="width:128.9px;">&ensp;{{$items->category->name}}</td>
                    {{-- <td>{{ $items->price}}</td> --}}
                    <td style="width:128.8px;">&ensp;{{number_format($items->price,0,',',',')}} VNĐ</td>
                    {{-- <td>{{ $items->status == 1 ? 'active' : 'inactive'}}</td> --}}
                    <td style="width:128.8px; text-align:center;">
                        @if ($items->sold <= 0 || $items->sold == null)
                            0 Sold
                        @else
                            {{$items->sold}} Sold
                        @endif
                    </td>
                    <td style="width:128.8px; text-align:center;">
                        @switch($items->status)
                            @case(config('constants.product.status.active'))
                                <button type="button" class="btn btn-success" style="width:105px; border-radius: 50%; border-color: black;" width="105px">Active</button>
                                @break
                            @default
                                <button type="button" class="btn btn-outline-secondary" style="width:105px; border-radius: 50%; border-color: black; background-color:#bbb7b7;" width="105px">Inactive</button>
                        @endswitch
                    </td>
                    <td style="width:128.8px;">&ensp;{{date("Y/m/d H:i", strtotime($items->updated_at))}}</td>
                    <td style="text-align:center; border:0px;">
                        <div style="display:flex; margin-left:18px;">
                            <a href="{{route('cms.product.show', ['product' => $items->id])}}" class="btn btn-info" style="width:38.25px; margin-left: 20px;"><i class="fa fa-eye"></i></a>
                            <a href="{{route('cms.product.edit', ['product' => $items->id])}}" class="btn btn-warning" style="margin-left:1px; margin-right:1px;"><i class="fa fa-pencil-square"></i></a>
                            <form action="{{route('cms.product.destroy', ['product' => $items->id])}}" method="post">
                                @csrf
                                @method('DELETE')
                                <input name="_method" type="hidden" value="DELETE">
                                <button type="submit" data-name="{{$items->name}}" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </table>
        </tr>
    </table>
    <div class="text-xs-center">
        {{$products->links()}}
    </div> <br>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete').click(function(e) {
                if(!confirm('Are you sure to delete this product ' + $(this).data('name') + " ?")) {
                    e.preventDefault();
                }
            });
        });
    </script>
@endsection
