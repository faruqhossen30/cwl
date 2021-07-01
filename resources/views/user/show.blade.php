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
                <h1>User Details</h1>
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
    <div class="card">
      <img src="{{asset('asset/img/team2.jpg')}}" alt="John" style="width:100%">
      <h1 class="nav">ID : {{$user[0]->id}}</h1>
      <p class="title nav">{{$user[0]->username}}</p>
      <p class="nav">Harvard University</p>
      <div style="margin: 24px 0;">
        <a href="#"><i class="fa fa-dribbble"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a>  
        <a href="#"><i class="fa fa-linkedin"></i></a>  
        <a href="#"><i class="fa fa-facebook"></i></a> 
      </div>
    </div>
  </div>  
</div>
@endsection