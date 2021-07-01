
<style>

.travel-zone-image {
  position: relative;

}
.zone-img-orvl{
  transition: .5s ease;
  opacity: 0;
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  text-align: center;
}
.zone-img{
  opacity: 1;
  display: block;
  width: 100%;
  height: auto;
  transition: .5s ease;
  backface-visibility: hidden;
}
.travel-zone-image:hover .zone-img {
  opacity: 0.3;
}

.travel-zone-image:hover .zone-img-orvl {
  opacity: 1;
}
.__single_travel_zone {
  box-shadow: 3px 3px 3px #ddd;
  padding: 15px 15px;
  text-align: center;
  margin-bottom: 30px;
}

</style>
@extends("frontend.index")
@section("fontbody")
    <div class="container">
      <div class="__blog mt-5">
      
        <div class="row">
        @foreach($users as $user)
          <div class="col-lg-3">
            <div class="__single_travel_zone">
              
                <div class="travel-zone-image">
                  <img class="zone-img" src="uploads/{{$user->image}}" alt="">
                  <div class="zone-img-orvl">
                    <div class="text">
                      <a href="#" class="btn btn-primary">Exlore Now</a>
                    </div>
                  </div>
                </div>
              

                <div class="__single_blog_details">
                  <h4 class="__single_blog_heading">
                    <a href="#">{{$user->title}}</a>
                  </h4>
                  <p class="__s_b_short_desc">
                    {{$user->discription}}
                  </p>
                </div>
              
            </div>
          </div>  
          @endforeach         
         </div>
         
      </div>
    </div>
@endsection