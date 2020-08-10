@extends('layout.main')

@section('css-custom')
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet" type="text/css" />  {{-- add boostrap css--}}
@endsection

@section('body')

@include('layout.solid-navbar')

<!--breadcrumb -->
<div class="custom-breadcrumb ">
    <div class="container pt-2 ">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb custom-breadcrumb">
              <li class="breadcrumb-item "><a class="color-black text-bold" href="{{route('home')}}">Home <i class="fa fa-chevron-right" aria-hidden="true"></i></a> </li>
              <li class="breadcrumb-item" id="breadcrumb1"><a class="color-black  text-bold" href="{{route('home')}}">Menu <i class="fa fa-chevron-right" aria-hidden="true"></i></a> </li>
              <li class="breadcrumb-item active" id="breadcrumb2" aria-current="page">Product</li>
            </ol>
        </nav>
    </div>
</div>
<!--End  -->


<!--Product-->
<div class="container  ">
    <div class="row mb-5">
        <div class="col-6">
            <div class="row">
                <div class="col-12">
                    <div class="principal-image">
                        <img  class="img-fluid" src="{{asset('image/products/beef-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>

            <div class="row pt-4">
                <div class="col-4">
                    <div class="principal-image">
                        <img  class="img-fluid" src="{{asset('image/products/beef-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-4">
                    <div class="principal-image">
                        <img  class="img-fluid" src="{{asset('image/products/beef-1.jpg')}}" alt="">
                    </div>
                </div>
                <div class="col-4">
                    <div class="principal-image">
                        <img  class="img-fluid" src="{{asset('image/products/beef-1.jpg')}}" alt="">
                    </div>
                </div>
            </div>
        </div>

        <div class="col-6">
            <div class="product-description pl-2">
                <h1>Beef Steak Marinade</h1>
                <span class="ranking mt-2"> 
                    <i class="fa fa-star" aria-hidden="true"></i> 
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star" aria-hidden="true"></i>
                    <i class="fa fa-star-half-o" aria-hidden="true"></i>

                    <span class="color-gray">(4 Customer Review)</span>
                </span>

                <h2 class="price color-red mt-3">$25.99</h2>

                <p class="color-gray text-bold mt-5">
                    Pellentesque habitant morbi tristique senectus et netus et malesuada 
                    fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, 
                    ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. 
                    Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                </p>

                <div class="row mt-5">
                    <div class="col-3">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                              <button class="btn btn-outline-secondary" type="button">-</button>
                            </div>
                            <input type="text" class="form-control" placeholder="" aria-label="" aria-describedby="basic-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-secondary" type="button">+</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-5">
                        <a class="btn btn-default btn-lg button-red" href="{{route('single.product')}}">ADD TO CART</a>
                    </div>
                </div>

                <div class="list">
                    <p class="list-item text-secondary text-bold">Categories: <span class="color-black">Beef Steak </span></p>
                    <p class="list-item text-secondary text-bold">Tag: <span class="color-black">Beef, Barbecue, Grill</span></p>
                    <p class="list-item text-secondary text-bold">Shared Link: 
                        <span class="color-black">
                            <i class="fa fa-facebook pl-2 pr-2" aria-hidden="true"></i>
                            <i class="fa fa-twitter pl-2 pr-2" aria-hidden="true"></i>
                            <i class="fa fa-google-plus pl-2 pr-2" aria-hidden="true"></i>
                            <i class="fa fa-rss pl-2 pr-2" aria-hidden="true"></i>
                        </span>
                    </p>
                </div>

            </div>
        </div>
    </div>

    <div class="row pt-5">
        <div class="col-12 ">
            <div class="rounded border ">
                <div class="p-5">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item">
                        <a class="nav-link nav-secondary active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Description</a>
                        </li>
                        <li class="nav-item">
                        <a class="nav-link nav-secondary" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Reviews (1)</a>
                        </li>
                    </ul>
    
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            <p class="color-gray text-bold">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
                            Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                            </p>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                            <p class="color-gray text-bold">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. 
                            Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. 
                            Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--End  -->
@include('layout.secondary-footer')
@endsection