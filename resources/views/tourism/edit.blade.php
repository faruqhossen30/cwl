@extends("home")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tourism Edit table</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Tourism Profile</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>
<div class="col-sm-10">
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Tourism Edit tables</h3>
        </div>
        <form Action="{{route('travelback.update',$user[0]->id)}}" method="POST">
            @csrf
            @method("PUT")
            <div class="card-body">
                <div class="form-group">
                    <label for="txtusername">Image</label>
                    <input type="text" class="form-control" value="{{$user[0]->image}}" name="txtimg" id="txtimg" placeholder="Enter img">
                </div>
                <div class="form-group">
                    <label for="pwdpassword">Title</label>
                    <input type="text" class="form-control" value="{{$user[0]->title}}" name="txttitle" id="txttitle" placeholder="Title">
                </div>
                <div class="form-group">
                    <label for="pwdrepassword">Description</label>
                    <input type="text" class="form-control" value="{{$user[0]->discription}}" name="txtdescrip" id="txtdescrip" placeholder="discription ">
                </div>
                <!-- <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div> -->
            </div>
            <div class="card-footer">
                <button type="submit" name="btnsubmit" class="btn btn-primary">update</button>
                <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
            </div>
        </form>
    </div>
</div>
@endsection