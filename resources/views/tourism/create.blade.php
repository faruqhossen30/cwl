@extends("home")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Create tourism Place</h1>
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
            <h3 class="card-title">Create tourism Place</h3>
        </div>
        <form Action="{{route('travelback.store')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="file ">Tourism place image</label>
                    <input type="file" class="form-control" name="file" id="file" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label for="txttitle">title </label>
                    <input type="text" class="form-control" name="txttitle" id="txttitle" placeholder="place title">
                </div>
                <div class="form-group">
                    <label for="txtdetails">details</label>
                    <input type="text" class="form-control" name="txtdetails" id="txtdetails" placeholder="place description">
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