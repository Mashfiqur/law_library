<!DOCTYPE html>
<html lang="en">
  <head>
    <title>LAW LIBRARY</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/fonts/icomoon.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/dropdown.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/magnific-popup.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/jquery-ui.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{URL::to('/')}}/css/owl.theme.default.min.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/fonts/flaticon.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/aos.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/style1.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

  <div class="site-wrap"  id="home-section">

    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
        <div class="row align-items-center position-relative">


            <div class="site-logo">
              <a href="home" class="text-black"><span class="text-primary">Law Library</a>
            </div>

              <nav class="site-navigation text-center ml-auto" role="navigation">

                <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                    <li >

                        <input type="text" style="height: 2.5rem;width: 17rem" placeholder="Search Anything">

                        <button class="btn btn-primary">Search</button>
                    </li>

                <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>

                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Our Services</a>
                                <ul class="dropdown-menu">

                                    <li class="nav-item"><a class="nav-link" href="#">Appeals</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Bail </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Civil </a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Criminal</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Family Law</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Popular Cases</a></li>
                                    <li class="nav-item"><a class="nav-link" href="#">Others</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about">About Us</a></li>

                            @if(session('name'))
                            <li class="nav-item"><a class="nav-link" href="cases">Cases</a></li>
                                <li class="nav-item"><a class="nav-link font-weight-bold" href="logout">
                                        <i class="fa fa-power-off"></i> Logout ({{session('name')}})</a></li>
                            @else
                                <li class="nav-item "><a class="nav-link" href="signup">Sign Up</a></li>
                                <li class="nav-item"><a class="nav-link" href="login">Log In</a></li>
                            @endif
                </ul>
              </nav>



          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>




     </header>


     <body>
        @yield('content')
    </body>

  <script src="{{URL::to('/')}}/js/jquery-ui.js"></script>
  <script src="{{URL::to('/')}}/js/popper.min.js"></script>
  <script src="{{URL::to('/')}}/js/bootstrap.min.js"></script>
  <script src="{{URL::to('/')}}/js/jquery-3.3.1.min.js"></script>
  <script src="{{URL::to('/')}}/js/owl.carousel.min.js"></script>
  <script src="{{URL::to('/')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{URL::to('/')}}/js/jquery.sticky.js"></script>
  <script src="{{URL::to('/')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{URL::to('/')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{URL::to('/')}}/js/aos.js"></script>

  <script src="{{URL::to('/')}}/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>





