@extends("home")
@section("body")
<style>
.nav{
  margin:0 auto;
}
</style>
<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Tourism Details</h1>
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
<!-- <h2 style="text-align:center">User Profile Card</h2> -->
<div class="row">
  <div class="col-4 nav">
    <div class="card" style="padding:5px;">
      <img src="{{asset('uploads/'.$user[0]->image)}}" alt="John" style="width:100%">
      <h1 class="nav">ID : {{$user[0]->id}}</h1>
      <p class="title nav">{{$user[0]->title}}</p>
      <p class="title nav">{{$user[0]->discription}}</p>
    </div>
  </div>  
</div>
@endsection
