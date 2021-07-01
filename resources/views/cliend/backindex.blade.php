@extends("home")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Client Informations</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">User Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-12" style="margin:0 auto;">
    <div class="card card-secondary">
        <div class="card-header">
        <h3 class="card-title">Client Management Table</h3>


        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
                @if (session('success'))
                <div class="alert alert-warning alert-dismissible fade show m-3" role="alert">
                <strong>{{session('success')}}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif


        <table class="table table-hover table-bordered text-nowrap" id="myTable">

            <thead>
            <tr>
                <th>S.N</th>
                <th>Company Name</th>
                <th>Email</th>
                <th>Mobile</th>
                <th>Country</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->companyname}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->phone}}</td>
                <td>{{$user->division}}</td>
                <td>
                <a href="{{url('cliendback/'.$user->id)}}" class="btn btn-primary btn-sm">View</a>
                    <a href="{{url('cliendback/'.$user->id.'/edit')}}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{url('cliendback/'.$user->id)}}" method="post" style="display:inline-block">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="confirm('Sure ? Want to delete company ?')" class="btn btn-danger btn-sm">Delete</button>
                    </form>

                </td>



                {{-- <div class="clearfix">
                        <a style="float:left;margin-right:5px" href="#"class="btn btn-success"> Details </a>
                        <a style="float:left; margin-right:5px" href="#" class="btn btn-success"> edit </a>
                        <form style="float:left; margin-right:5px;" onsubmit="return confirm('Are you sure?')" action="#" method="POST" class="btn btn-danger btn-sm rounded-5" type="button">
                            @csrf
                            @method("delete")
                        <input type="submit" name="btnsubmit" value="delete">
                        </form>
                    </div> --}}

                <!-- <div class="clearfix">
                    <a style="float:left; height:31;" href="{{route('users.show',$user->id)}}" class="btn btn-primary btn-sm rounded-5" type="button"><i class="fa fa-table">detail</i></a>

                    <a style="float:left;" href="{{route('users.edit',$user->id)}}" class="btn btn-success btn-sm rounded-5" type="button"><i class="fa fa-edit"></i>Edit</a>

                    <form style="float:left;" onsubmit="return confirm('Are you sure?')" action="{{route('users.destroy',$user->id)}}" method="POST" class="btn btn-danger btn-sm rounded-5" type="button">
                      @csrf
                      @method("delete")

                    <input type="submit" name="btnsubmit" value="delete">
                    </form>
                </div>       -->
                </td>
            </tr>
            @endforeach
            </tbody>
        </table>
        </div>
    </div>
</div>
@endsection
@push('css')
<link rel="stylesheet" href="{{asset('assets/css/jquery.dataTables.min.css')}}">
    <style>
        .dataTables_length {
            padding: 10px;
        }
        .dataTables_filter{
            padding: 10px;
        }
        .dataTables_info {
            margin-left: 10px;
        }
    </style>
@endpush
@push('js')
    <script src="{{asset('assets/js/jquery.dataTables.min.js')}}"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
@endpush


