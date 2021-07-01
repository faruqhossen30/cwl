@extends("frontend.index")
@section("fontbody")
<div class="container">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="__custom_box mt-5">                    
              <h4 class="text-center text-uppercase __heading_box">signup</h4>                   
        <form Action="{{route('cliendreg.store')}}" method="POST">
        @csrf                              
          <div class="form-group">
              <label>Email</label>
              <input type="email" placeholder="Enter your email address" name="txtemail" class="form-control">
          </div>
          <div class="form-group">
              <label>Cell phone number</label>
              <input type="tel" placeholder="Enter Cell phone number" name="txtphone" class="form-control">
          </div>
          <div class="form-group">
              <label>Company Name</label>
              <input placeholder="Company name " type="text" name="txtcompanyname" class="form-control">
          </div>
          <div class="form-group">
              <label>Password</label>
              <input type="password" placeholder="Enter a password" name="txtpassword" class="form-control">
          </div>
          <div class="form-group">
              <label>Re-Password</label>
              <input type="password" placeholder="Enter a confirm password" name="txtrepassword" class="form-control">
          </div>
          <div class="form-group">
              <label>Select Country</label>
              <select name="selectdivition" class="form-control" >
                  <option value="Dhaka">Bangladesh</option>
                  <option value="Sylhet">America</option>
                  <option value="Rangpur">Pakistan</option>
                  <option value="Rajshahi">China</option>
                  <option value="Khulna">Turky</option>
                  <option value="Mymensingh">Iran</option>
                  <option value="Chittagong">Afghanistan</option>
                  <option value="Barisha">London</option>
              </select>
          </div>

          <div class="row justify-content-center">
              <div class="col-lg-8">
                  <button class="btn btn-primary text-uppercase btn-block">Signup</button>
                  <a class="btn btn-primary text-uppercase btn-block" href="{{url('cliend')}}">login</a>
              </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@endsection