@extends("frontend.index")
@section("fontbody")
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="__custom_box mt-5">                    
                  <h4 class="text-center text-uppercase __heading_box">login</h4>                   
                  <form action="cliendlogin" method="post">
                    @csrf
                    <div class="form-group">
                        <label>Email</label>
                        <input placeholder="Enter Email address " type="email" name="txtusername" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input placeholder="Password " type="password" name="pwdpassword"  class="form-control">
                    </div>                   
                    <div class="row justify-content-center">
                      <div class="col-lg-8">
                        <button class="btn btn-primary text-uppercase btn-block">login</button>
                        <a class="btn btn-primary text-uppercase btn-block" href="{{route('cliendreg.create')}}">signup</a>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
@endsection

