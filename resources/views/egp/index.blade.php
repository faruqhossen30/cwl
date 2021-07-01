@extends("home")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1></h1>
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
<div class="col-10" style="margin:0 auto;">
    <div class="card card-primary">
        <div class="card-header">
        <h3 class="card-title">EGP traning Management</h3>

        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
            <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

            <div class="input-group-append">
                <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>
            </div>
            </div>
        </div>
        </div>
        <!-- /.card-header -->
        <div class="card-body table-responsive p-0">
        <table class="table table-hover text-nowrap table-striped">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>designation</th>
                <th>organization</th>
                <th>address</th>
                <th>mobil</th>
                <th>email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->designation}}</td>
                <td>{{$user->organization}}</td>
                <td>{{$user->address}}</td>
                <td>{{$user->mobil}}</td>
                <td>{{$user->email}}</td>
                <td> 
                <div class="clearfix">
                        <a style="float:left;margin-right:5px" href="#"class="btn btn-success"> Details </a>
                        <a style="float:left; margin-right:5px" href="#" class="btn btn-success"> edit </a>
                        <form style="float:left; margin-right:5px;" onsubmit="return confirm('Are you sure?')" action="#" method="POST" class="btn btn-danger btn-sm rounded-5" type="button"> 
                            @csrf 
                            @method("delete")                      
                        <input type="submit" name="btnsubmit" value="delete">
                        </form>
                    </div>


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


