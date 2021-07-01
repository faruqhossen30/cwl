@extends("home")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>create user</h1>
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
<div class="col-sm-10">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">User Create tables</h3>
        </div>
        <form Action="{{route('users.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="txtusername">User Name</label>
                    <input type="text" class="form-control" name="txtusername" id="txtusername" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="pwdpassword">Password</label>
                    <input type="password" class="form-control" name="pwdpassword" id="pwdpassword" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="pwdrepassword">RePassword</label>
                    <input type="password" class="form-control" name="pwdrepassword" id="pwdrepassword" placeholder="Password">
                </div>
                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
            </div>
            <div class="card-footer">
                <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
                <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
            </div>
        </form>
    </div>
</div>
@endsection