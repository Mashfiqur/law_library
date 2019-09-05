<!DOCTYPE html>
<html lang="en">
<head>
    <title>ADMIN LAW LIBRARY</title>
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
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/fonts/flaticon.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/aos.css">

    <link rel="stylesheet" href="{{URL::to('/')}}/css/style1.css">

    <style>
        .sticky-wrapper .site-navbar {
            background: #4c4c4c;
        }
        .sticky-wrapper.is-sticky .site-navbar {
            background: #4c4c4c;
        }
        .sticky-wrapper.is-sticky .site-navbar ul li a {
            color: white !important;
        }
        .site-navbar .site-navigation .site-menu > li > a {
            color: white;
        }
    </style>

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap "  id="home-section">

    <div class="site-mobile-menu site-navbar-target text-white">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>


    <header class="site-navbar js-sticky-header site-navbar-target text-white" role="banner">

        <div class="container">
            <div class="row align-items-center position-relative">


                <div class="site-logo">
                    <a class="text-white" href="{{url('/admin/home')}}">ADMIN Law Library</a>
                </div>

                <nav class="site-navigation text-center  ml-auto" role="navigation">

                    <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block text-white">

                        <li class="nav-item"><a class="nav-link" href="{{url('/admin/categories')}}"><i class="fa fa-barcode"></i> Categories</a></li>
                        <li class="nav-item"><a class="nav-link" href="{{url('/admin/law-cases')}}">Cases</a></li>
                        @if(session('name'))
                            <li class="nav-item"><a class="nav-link font-weight-bold" href="{{url('/logout')}}">
                                    <i class="fa fa-power-off"></i> Logout ({{session('name')}})</a></li>
                        @else
                            <li class="nav-item "><a class="nav-link" href="{{url('/signup')}}">Sign Up</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Log In</a></li>
                        @endif
                    </ul>
                </nav>



                <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

            </div>
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
    <script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

    <!-- Include this after the sweet alert js file -->
    @include('sweet::alert')
    <script>
        $(document).ready( function () {
            $('#table').DataTable();
        } );
    </script>
</html>





