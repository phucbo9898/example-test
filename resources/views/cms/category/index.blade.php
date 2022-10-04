@extends('cms.layout.layout')
@section('content-main')
@section('category','active')
    <span style="font-size: 40px; margin-left:15px;">Category List</span> <hr>
    <form action="{{ route('cms.search.category')}}" method="get">
        <div style="display: flex; margin-left: 20px;">
            <div>
                <span>Name</span><br>
                <input type="text" name="keyword" id="keyword" placeholder="Search name" value="{{ isset($keyword) ? $keyword : '' }}">
            </div>
            <button type="submit" style="margin-left: 30px; width: 90px; height: 30px; margin-top: 18px;">search</button>
        </div>
    </form>
    <a href="{{ route('cms.category.create')}}" class="btn btn-primary" style="margin-left: 20px; margin-top:20px;"> Create new category</a>
    <br><br>

    <!-- Alert Success - Failed -->
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

    <table  style="margin-left: 20px; margin-right: 10px; margin-top: 20px; border:0px;">
        <tr>
            <table cellspacing="0" border="1" rules="all" style="width: 85%; border: 1px solid; margin-left: 105px; margin-right: 10px; margin-top: 10px;">
                <tr style="height: 45px;">
                    <th width="5%" style="text-align:center;border:1px solid;">No</th>
                    <th width="20%" style="text-align:center;border:1px solid;">Category name</th>
                    <th width="20%" style="text-align:center;border:1px solid;">Created by</th>
                    <th width="" style="text-align:center;border:1px solid;">Created at</th>
                    <th width="" style="text-align:center;border:1px solid;">Updated at</th>
                    <th width="" style="text-align:center;border:1px solid;">Action</th>
                </tr>
            </table>
        </tr>
        <tr>
            <table id="listCategory" cellspacing="0" border="1" style="width: 85%; border: 1px solid; margin-left: 105px; margin-right: 10px;" rules="cols">
                @foreach ($categories as $key => $items)
                <tr style="height: 60px;">
                    <td style="text-align: center; width: 5%;">{{($categories->currentPage() - 1) * $categories->perPage() + $loop->index + 1}}</td>   <!-- $key = $loop->index -->
                    <td style="width: 20%;">&ensp;{{$items->name}}</td>
                    <td style="width: 20%;">
                        @if (!empty($items->user['name']))
                            &ensp;{{$items->user['name']}}
                        @endif
                    </td>
                    {{-- <td style="text-align: center;"><img src="{{asset($items->image)}}" alt="" style="width:60px;"></td> --}}
                    <td style="width: 224.08px;">&ensp;{{$items->created_at->format('Y/m/d H:i')}}</td>
                    <td style="width: 236.08px;">&ensp;{{$items->updated_at->format('Y/m/d H:i')}}</td>
                    <td style="text-align: center; display: flex; border: 0px; margin-top: 15px; margin-left: 13px;">
                        <a href="{{route('cms.category.show', ['category'=>$items->id])}}" class="btn btn-info" style="margin-right: 1px;"><i class="fa fa-eye" style="width: 12.25px;"></i></a>
                        <a href="{{route('cms.category.edit', ['category'=>$items->id])}}" class="btn btn-warning" style="margin-right: 1px;"><i class="fa fa-pencil-square"></i></a>
                        <form action="{{route('cms.category.destroy',['category' => $items->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <input name="_method" type="hidden" value="DELETE">
                            {{-- @dd($products) --}}
                            @if (count($items->product) > 0)
                                <button type="submit" data-name="{{$items->name}}" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                            @else
                                <button type="submit" class="btn btn-danger"><i class="fa fa-trash"></i></button>
                            @endif
                        </form>
                    </td>
                </tr>
                @endforeach
            </table>
        </tr>
    </table>
    <div class="text-xs-center">
        {{$categories->links()}}
    </div> <br>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete').click(function(e) {
                if(!confirm('Are you sure to delete this category ' + $(this).data('name') + " ?")) {
                    e.preventDefault();
                }
            });
        });
    </script>

@endsection
