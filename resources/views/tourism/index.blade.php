@extends("home")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>List of tourism Place</h1>
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
        <h3 class="card-title">tourism Place</h3>

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
                <tr style="100%;">
                    <th style="width: 10px">ID</th>
                    <th>Image name</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($placess as $places)
                <tr>
                    <td>{{$places->id}}</td>
                    <td>{{$places->image}}</td>
                    <td>{{$places->title}}</td>
                    <td style="width:300px;">{{$places->discription}}</td>
                    <td> 
                    <div class="clearfix">
                            <a style="float:left;margin-right:5px" href="{{route('travelback.show',$places->id)}}"class="btn btn-success"> Details </a>
                            <a style="float:left; margin-right:5px" href="{{route('travelback.edit',$places->id)}}" class="btn btn-success"> edit </a>
                            <form style="float:left; margin-right:5px;" onsubmit="return confirm('Are you sure?')" action="" method="POST" class="btn btn-danger btn-sm rounded-5" type="button"> 
                                <!-- @csrf 
                                @method("delete")                       -->
                            <input type="submit" name="btnsubmit" value="delete">
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection