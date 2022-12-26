@extends("front.layouts.master")
@section("content")
@section('index','active')

    
    <!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="caption">
              <h2>Lorem ipsum dolor sit amet.</h2>
              <div class="line-dec"></div>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis, voluptatibus. Lorem ipsum dolor sit amet. 
              <br><br>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Non, consequuntur.</a> Lorem ipsum dolor sit amet.<a rel="nofollow" href="https://www.pexels.com">Lorem, ipsum.</a></p>
              <div class="main-button">
                <a href="{{route('products')}}">Order Now!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    <!-- Featured Starts Here -->
    <div class="featured-items">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>Featured Items</h1>
            </div>
          </div>
          <div class="col-md-12">
            <div class="owl-carousel owl-theme">
              @foreach ($products as $product)
                
             <a href="{{route('single',$product->id)}}">
                <div class="featured-item">
                  <img src="{{asset('images/').'/'.$product->coverPhoto}}" style = "height: 240px;" alt="Item 1">
                  <h4>{{$product->name}}</h4>
                  <h6>${{$product->price}}</h6>
                </div>
              </a>

              @endforeach
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Featred Ends Here -->
@endsection