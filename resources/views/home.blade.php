@extends('layout.main')

@section('css-custom')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />  {{-- add boostrap css--}}
@endsection

@section('body')
@include('layout.navbar')
<!-- Background video -->
<div class="video-background-holder">
  <div class="video-background-overlay"></div>
  <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
        <source src="video/video.mp4" type="video/mp4">
    </video>
  <div class="video-background-content container h-100">
    <div class="d-flex h-100 text-center align-items-center">
      <div class="w-100 text-white">
        <h1 class="display-4">Ivy Bakery</h1>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- End -->

<!--title --->
  <div class="section-title text-center d-flex align-items-center">
    <div class="collage-title">
      <h2>Ivy Bakery's Store</h2>
      <p>Choose category product that you love her</p>
    </div>

  </div>
<!--End --->


<!-- Collage -->
<div class="section pl-5 pr-2">

  <div class="box">
    <div class="content">
      <h2 class="text-left-bottom">Lean Yeast Bread</h2>
      <a class="text-left-bottom-link color-red text-bold" href="{{route('single.product')}}">EXPLORE 
        <i class="fa fa-long-arrow-right" aria-hidden="true"></i>
      </a>
    </div>
  </div>

  <div class="box">
    <div class="content">
      <h2 class="text-left-bottom">Cabernet Sauvignon</h2>
    </div>
  </div>

  <div class="box">
    <div class="content">
      <h2>About Lvy Bakery</h2>
      <h5 class="text-secondary">A Premium Theme For Your Coffee Shop</h5>
      <p class="text-center pt-2">Lorem ipsum dolor sit amet, consectetur adipiscing elit,
         sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
         Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi</p>

      <p class="text-center pt-2 text-bold"><span class="text-link-red-bold">Lara Croft</span> - CEO of Ivy Inc. </p>
    </div>
  </div>

  <div class="box">
    <div class="content">
      <h2 class="text-white">Event</h2>
      <div class="d-flex justify-content-around pt-5">
        <h3 class="text-white ">02</h3>
        <h3 class="text-white">14</h3>
        <h3 class="text-white ">36</h3>
        <h3 class="text-white ">20</h3>
      </div>
    </div>
  </div>

  <div class="box">
    <div class="content">
      <h2 class="text-butter text-white">Butter Cake</h2>
      <a class="btn btn-default btn-lg btn-custom-lg" href="{{route('single.product')}}">View Shop</a>
    </div>
  </div>

  <div class="box">
    <div class="content">
      <h2 class="text-butter text-white">Subscribe to our newsletter</h2>
      <div class="input-group form-subscribe"> 
        <input type="text" class="form-control non-radius" placeholder="Your Email" aria-label="Recipient's username" aria-describedby="basic-addon2">
        <div class="input-group-append">
          <button class="btn btn-outline-secondary button-red" type="button">SUSCRIBE</button>
        </div>
      </div>
    </div>
  </div>

  <div class="box">
    <div class="content">
      <div class="card non-radius center-card" >
        <div class="card-body">
          <h2>New York, <span class="text-secondary">United States</span></h2>
          <p class="card-text">155 West 43rd. St, New York, NY 10036 <br> Email: lvyrestaurant@info.com</p>
          <p class="text-center pt-2">CALL CENTER</p>
          <h2>(+88) 111 555 666</h2>
          <div class="d-flex justify-content-around pt-4">
            <i class="fa fa-facebook" aria-hidden="true"></i>
            <i class="fa fa-twitter" aria-hidden="true"></i>
            <i class="fa fa-instagram" aria-hidden="true"></i>
            <i class="fa fa-youtube" aria-hidden="true"></i>
            <i class="fa fa-tripadvisor" aria-hidden="true"></i>
          </div>
        </div>
      </div>
      
    </div>
  </div>
 
  <div class="box">
    <div class="content pl-4 pr-4">
      <h2 class="text-white text-left pt-2 pb-2">What Clients Say?</h2>
      <h4 class="text-white pt-5">Ivy theme is so simple, it's so easy to use. And from the customer's standpoint it's very intuitive, the platform is 
          pretty much unlimited features!
      </h4>

      <p class="text-white text-left pt-4"> Ollie Schneider</p>
    </div>
  </div>

</div>
<!-- End-->


<!-- logos -->
<div class="section-logos">
  <div class="row">
    <div class="col-2">
      <img src="{{asset('image/logos/logo1.png')}}" width="160" height="125" alt="">
    </div>
    <div class="col-2">
      <img src="{{asset('image/logos/logo2.png')}}" width="160" height="120" alt="">
    </div>
    <div class="col-2">
      <img src="{{asset('image/logos/logo3.png')}}" width="160" height="115" alt="">
    </div>
    <div class="col-2">
      <img src="{{asset('image/logos/logo4.png')}}" width="160" height="120" alt="">
    </div>
    <div class="col-2">
      <img src="{{asset('image/logos/logo5.png')}}" width="160" height="115" alt="">
    </div>
    <div class="col-2">
      <img src="{{asset('image/logos/logo6.png')}}" width="160" height="120" alt="">
    </div>
  </div>
</div>
<!-- End-->


@include('layout.footer')
@endsection