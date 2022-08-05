@extends('front.layouts.master')
@section('content')
@section('about','active')
    <!-- Page Content -->
    <!-- About Page Starts Here -->
    <div class="about-page">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <div class="line-dec"></div>
              <h1>About Us</h1>
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-image">
              <img src="{{asset('/').'images/'.$about->image}}" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-content">
              <h4>{{$about->title}}</h4>
              <p>{{$about->aboutUs}}</p>
              <div class="share">
                <h6>Find us on: <span><a href="#"><i class="fa fa-facebook"></i></a><a href="#"><i class="fa fa-linkedin"></i></a><a href="#"><i class="fa fa-twitter"></i></a></span></h6>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- About Page Ends Here -->

@endsection