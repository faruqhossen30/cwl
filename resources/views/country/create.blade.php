@extends("home")
@section("body")
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add Location</h1>
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
            <h3 class="card-title">New Location add</h3>
        </div>
        <form Action="{{route('country.store')}}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="txtcountry">Location Name</label>
                    <input type="text" class="form-control" name="txtcountry" id="txtcountry" placeholder="Enter Location">
                </div>
            </div>
            <div class="card-footer">
                <button type="submit" name="btnsubmit" class="btn btn-primary">Submit</button>
                <!-- <button type="submit" class="btn btn-default float-right">Cancel</button> -->
            </div>
        </form>
    </div>
</div>
@endsection