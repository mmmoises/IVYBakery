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
              <li class="breadcrumb-item active" id="breadcrumb2" aria-current="page">Check Out</li>
            </ol>
        </nav>
    </div>
</div>
<!--End  -->


<div class="container pading-section">
    <div class="row mb-5">
        <div class="col-12">
            <p class="text-bold"> Returning customer? <span class="color-red">Click here</span> to login</p>
        </div>
    </div>

    <div class="row">
        <div class="col-8">
            <p class="text-center color-black text-bold">Billing Address</p>

            <div class="card non-radius">
                <div class="card-body">
                    <form>
                        
                          <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">COUNTRY*</label>
                            <div class="col-sm-9">
                                <select class="form-control custom-input" id="exampleFormControlSelect2">
                                    <option></option>
                                    <option>Option 1</option>
                                    <option>Option 2</option>
                                    <option>Option 3</option>
                                    <option>Option 4</option>
                                </select>
                            </div>
                          </div>

                        <div class="form-group row">
                          <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">FIRST NAME*</label>
                          <div class="col-sm-9">
                            <input type="text" class="form-control custom-input" id="inputPassword" >
                          </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">LAST NAME*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control custom-input" id="inputPassword" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">COMANY NAME*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control custom-input" id="inputPassword" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">ADDRESS*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control custom-input" id="inputPassword" placeholder="Street Address" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray"></label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control custom-input" id="inputPassword" placeholder="Apartament, suite, united, etc (optional)" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">TWON / CITY*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control custom-input" id="inputPassword"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">COUNTRY / STATES</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control custom-input" id="inputPassword"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">POSTCODE / ZIP*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control custom-input" id="inputPassword"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">EMAIL ADDRESS*</label>
                            <div class="col-sm-9">
                              <input type="email" class="form-control custom-input" id="inputPassword"  >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">PHONE*</label>
                            <div class="col-sm-9">
                              <input type="text" class="form-control custom-input" id="inputPassword"  >
                            </div>
                        </div>

                        <div class="form-check pt-4">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-bold color-gray" for="defaultCheck1">
                              Create an account?
                            </label>
                        </div>
                        <p class="text-bold color-gray mt-4">Create an account by entering the information below. if you are a returning 
                            customer please login at the top of the page</p>

                        <div class="form-group row">
                            <label for="inputPassword" class="col-sm-3 col-form-label text-bold color-gray">ACCOUNT PASSWORD*</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control custom-input" id="inputPassword"  >
                            </div>
                        </div>

                        <div class="form-check pt-4 pb-4">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label text-bold color-gray" for="defaultCheck1">
                              Ship to a different address?
                            </label>
                        </div>

                        <div class="form-group text-bold color-gray pb-4">
                            <label for="exampleFormControlTextarea1">ORDER NOTES</label>
                            <textarea class="form-control custom-input" id="exampleFormControlTextarea1" rows="3"></textarea>
                          </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-4">
            <p class="text-center color-black text-bold">Promotional Code</p>
            <div class="card non-radius mb-4">
                <div class="card-body">
                    <p class="text-bold">Enter your coupon code if you have one</p>
                    <div class="input-group"> 
                        <input type="text" class="form-control non-radius border-top-0 border-left-0" placeholder="Coupon Code" aria-label="Recipient's username" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                          <button class="btn btn-outline-secondary button-red" type="button">SUSCRIBE</button>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card non-radius">
                <div class="card-header text-center text-bold color-black">
                    Your Order
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                          <tr>
                            <th class="border-0" scope="col">PRODUCT</th>
                            <th class="border-0 text-right" scope="col">TOTAL</th>
                          </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th class="color-gray text-bold border-top-0">Product 1</th>
                                <td class="color-gray border-top-0 text-right">$ 25.00</td>  
                            </tr>
                            <tr>
                                <th class="color-gray text-bold">Product 1</th>
                                <td class="color-gray text-right">$ 25.00</td>  
                            </tr>
                            <tr>
                                <th class="color-gray text-bold">Product 1</th>
                                <td class="color-gray text-right">$ 25.00</td>  
                            </tr>
                            <tr>
                                <th class="color-gray text-bold">Shipping and Handling</th>
                                <td class="color-gray text-right">Free Shipping</td>  
                            </tr>

                            <tr>
                                <th >ORDER TOTAL</th>
                                <td class="color-red text-right">$ 25.00</td>  
                            </tr>
                        </tbody>
                      </table>

                    <div class="form-check pt-4 pl-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label text-bold color-gray" for="defaultCheck1">
                          Create an account?
                        </label>
                    </div>

                    <div class="card non-radius mb-2 mt-3">
                        <div class="card-body">
                            <p class="text-bold">Make your payment directly into our bank account. Please use your Order
                                ID as the payment reference.
                            </p>
                        </div>
                    </div>

                    <div class="form-check pt-4 pl-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label text-bold color-gray" for="defaultCheck1">
                          Cheque Payment 
                        </label>
                    </div>

                    <div class="form-check pt-4 pl-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label text-bold color-gray" for="defaultCheck1">
                          PayPal
                        </label>
                    </div>

                    <div class="form-check pt-4 pl-4">
                        <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                        <label class="form-check-label text-bold color-gray" for="defaultCheck1">
                          PayPal
                        </label>
                    </div>

                    <div class="pt-5 text-center">
                        <button class="btn  button-red order-button" type="button">PLACE ORDER</button>
                    </div>

                    

                </div>
            </div>


        </div>
    </div>
</div>


@include('layout.secondary-footer')
@endsection