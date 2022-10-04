@extends('cms.layout.layout')
@section('content-main')
@section('user', 'active')
    <span style="font-size: 40px; margin-left:15px;">User List</span> <hr>
    <form action="{{route('cms.search.user')}}" method="get">
        <div style="display: flex; margin-left: 20px;">
            <div>
                <span>Name/ Email</span><br>
                <input type="text" name="username" placeholder="Search name or email">
            </div>
            <div style="margin-left: 30px;">
                <span>Type</span><br>
                <select name="type" id="filter_type" style="height: 27px;">
                    <option value="">Choose type</option>
                    <option value="0">CMS user</option>
                    <option value="1">Front-end user</option>
                </select>
            </div>
            <button type="submit" style="margin-left: 30px; width: 90px; height: 30px; margin-top: 17px;">Search</button>
        </div>
    </form>
    <a href="{{route('cms.user.create')}}" class="btn btn-primary" style="margin-left: 20px; margin-top:20px;"> Create new user</a>
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
    <table id="customer_data" class="table table-striped table-bordered" cellspacing="0" style="margin-left: 20px; margin-right:10px; margin-top:10px;">
        <tr>
            <table cellspacing="0" border="1" rules="all" style="width:90%; border: 1px solid; margin-left: 60px; margin-right:10px; margin-top:20px;">
                <tr style="height: 45px;">
                    <th width="5%" style="text-align:center; border:1px solid;">No</th>
                    <th width="15%" style="text-align:center; border:1px solid;">User name</th>
                    <th width="20%" style="text-align:center; border:1px solid;">User email</th>
                    <th width="10%" style="text-align:center; border:1px solid;">Type</th>
                    <th width="15%" style="text-align:center; border:1px solid;">Created at</th>
                    <th width="15%" style="text-align:center; border:1px solid;">Updated at</th>
                    <th width="15%" style="text-align:center; border:1px solid;">Action</th>
                </tr>
            </table>
        </tr>
        <tr>
            <table cellspacing="0" border="1" style="width:90%; border: 1px solid; margin-left: 60px; margin-right:10px;" rules="cols">
                @foreach ($users as $key => $items)
                <tr style="height: 60px;">
                    <td width="61px" style="text-align:center;">{{($users->currentPage() - 1) * $users->perPage() + $loop->index + 1}}</td>   <!-- $key = $loop->index -->
                    {{-- <td style="text-align:center;"><img src="{{ asset($items->image)}}" alt="" style="width:60px;"></td> --}}
                    <td width="183px">&ensp;{{$items->name}}</td>
                    <td width="244px">&ensp;{{$items->email}}</td>
                    <td width="122px" style="text-align:center;">{{$items->role == config('constants.role.cms_user') ? 'CMS user' : 'Front-end user'}}</td>
                    <td width="183px" style="">&ensp;{{$items->created_at->format('Y/m/d H:i')}}</td>
                    <td width="183px" style="">&ensp;{{$items->updated_at->format('Y/m/d H:i')}}</td>
                    <td width="" style="text-align:center; display:flex; border:0px; margin-top:15px;">
                        <a href="{{ route('cms.user.show', ['user'=>$items->id])}}" class="btn btn-info" style="width:38.25px; margin-left: 23px;"><i class="fa fa-eye"></i></a>
                        <a href="{{ route('cms.user.edit', ['user' => $items->id])}}" class="btn btn-warning" style="margin-left:1px; margin-right:1px;"><i class="fa fa-pencil-square"></i></a>
                        <form action="{{route('cms.user.destroy', ['user' => $items->id])}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit" value="{{$items->id}}" data-name="{{$items->name}}" class="btn btn-danger delete"><i class="fa fa-trash"></i></button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </table>
        </tr>
    </table>
    <div class="text-xs-center">
        {{$users->links()}}
    </div> <br>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.delete').on('click',function(e) {
                if(!confirm("Are you sure to delete this user " + $(this).data('name') + " ?")) {
                    e.preventDefault();
                }
            });
        });
    </script>

@endsection
