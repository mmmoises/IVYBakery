<div class="bg-transparent solid-navbar">
  <nav class="navbar navbar-expand-lg navbar-light pt-4 pb-4 pl-5 pr-5">
    <span class="navbar-brand logo mb-0 color-red">Ivy</span>
      

      <button class="navbar-toggler" type="button" data-toggle="collapse" 
      data-target="#navbarPrimary" aria-controls="navbarPrimary" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

      
      <div class="collapse navbar-collapse justify-content-md-center" id="navbarPrimary">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link solid-nav-text" href="{{route('home')}}">HOME</a>
          </li>
          <li class="nav-item ">
            <a class="nav-link solid-nav-text" href="{{route('single.product')}}">MENU</a>
          </li>
          <li class="nav-item ">
              <a class="nav-link solid-nav-text" href="{{route('single.product')}}">RESERVATION</a>
          </li>
          <li class="nav-item">
              <a class="nav-link solid-nav-text" href="{{route('home')}}">PAGE</a>
          </li>
          <li class="nav-item">
              <a class="nav-link solid-nav-text" href="{{route('home')}}">BLOG</a>
          </li>
          <li class="nav-item">
              <a class="nav-link solid-nav-text" href="{{route('home')}}">CONTACT</a>
          </li>
        </ul>

      </div>

      <div class="header-extras pr-5">
        <ul class="navbar-nav">
            <li>
                <a id="btn-search" href="#"> <i class="icon-search"></i></a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle extra-solid-nav-text" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Eng
                <i class="fa fa-angle-down"></i>
              </a>
              <div class="dropdown-menu extra-dropdown-idiom" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">English</a>
                <a class="dropdown-item" href="#">Spanish</a>
                <a class="dropdown-item" href="#">French</a>
              </div>
            </li>

            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle extra-solid-nav-text" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                USD
                <i class="fa fa-angle-down"></i>
              </a>
              <div class="dropdown-menu extra-dropdown-country" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">USD</a>
                <a class="dropdown-item" href="#">EUR</a>
                <a class="dropdown-item" href="#">GTQ</a>
              </div>
            </li>

            {{--<li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle extra-solid-nav-text" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fa fa-shopping-bag">
                  <span class="badge badge-danger badge-icon">0</span>
                </i>
              </a>
              <div class="dropdown-menu extra-dropdown-shopping-bag" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="{{route('checkout')}}">Checkout</a>
              </div>
            </li>--}}
            <solid-shopping-cart-component></solid-shopping-cart-component>
        </ul>
    </div>
  </nav>

</div>