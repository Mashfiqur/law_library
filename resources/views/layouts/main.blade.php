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

  <html class="site-wrap"  id="home-section">

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
                <img src="{{URL::to('/')}}/images/lawlogo.png" style="width: 50px">
                <a href="{{url('/')}}" class="text-black"><span class="text-primary"><i>Law Library</i></span></a>
            </div>



                <div class="site-navigation text-center ml-auto" role="navigation">

            <div class="site-menu main-menu ml-auto d-none d-lg-block">




                        <input type="text" name="search" id="search" style="height: 2.2rem;width: 20rem" list="result" placeholder="Search Anything">
                        <datalist id="result"></datalist>
                        <button class="btn btn-primary" id="search-btn">Search</button>

                @if(session('role')=='admin')
                <li class="nav-item"><a class="nav-link text-secondary" href={{url('/admin/home')}}>Admin Home</a></li>
                @else

                <li class="nav-item active"><a class="nav-link" href={{url('/')}}>Home</a></li>
                @endif


                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                                 aria-expanded="false">Categories</a>
                                <ul class="dropdown-menu">
                                    @foreach($categories as $category)
                                        <li class="nav-item"><a class="nav-link" href="{{url('cases/category/'.$category->id)}}">{{$category->name}}</a></li>
                                    @endforeach

                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{url('/about')}}">About Us</a></li>

                            @if(session('name'))
                            <li class="nav-item"><a class="nav-link" href="{{url('/cases')}}">Cases</a></li>
                                <li class="nav-item"><a class="nav-link font-weight-bold" href="{{url('/logout')}}">
                                        <i class="fa fa-power-off"></i> Logout ({{session('name')}})</a></li>
                            @else
                                <li class="nav-item "><a class="nav-link" href="{{url('/signup')}}">Sign Up</a></li>
                                <li class="nav-item"><a class="nav-link" href="{{url('/login')}}">Log In</a></li>
                            @endif
                            </li>

                </div>
              </div>



          <div class="toggle-button d-inline-block d-lg-none"><a href="#" class="site-menu-toggle py-5 js-menu-toggle text-black"><span class="icon-menu h3"></span></a></div>

        </div>
      </div>




     </header>


     <body>
        @yield('content')


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
      <script src="https://unpkg.com/axios/dist/axios.min.js"></script>


      <script src="{{URL::to('/')}}/js/main.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script>

      $('#search-btn').on('click',function () {

          let text = $('#search').val();
          window.location.href = '/search-results/' + text;
        /*  return false;*/
      });


  </script>
  <script type="text/javascript">
          $('#search').on('keyup',function(){
              let value = $(this).val();
              axios.get(`{{url('search')}}`,{
                  params: {
                      search : value
              }}).then(response => {
                  console.log(response.data)
                  $('#result').empty();
                  $.each(response.data, function(key, value) {
                      $('#result').append('<option value="'+ value.title +'">'+ value.title +'</option>');
                  });
                      /*response.data.map(function(option) {
                          let $option = $('<option>');

                          $option
                              .val(option.title)
                              .text(option.title);

                          $('#result').append($option);
                      })*/
              }).catch(e => {
                  console.log('error',e)
              })

          })
      </script>



     </body>
  </html>



