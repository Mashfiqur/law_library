@extends('layouts.main')
@section('content')


<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif;}
    body, html {
        height: 100%;
        color: #777;
        line-height: 1.8;
    }

    /* Create a Parallax Effect */
    .bgimg-1, .bgimg-2, .bgimg-3 {
        position: relative;
        opacity: 0.65;
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    /* First image (Logo. Full height) */
    .bgimg-1 {
        background-image: url('images/home_image.jpg');
        min-height: 500px;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("images/supreme_court.jpg");
        min-height: 400px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url("images/justice-civil-law.jpg");
        min-height: 400px;
    }
    .parallax {
        /* The image used */
        background-image: url("images/home_image.jpg");

        /* Set a specific height */
        min-height: 500px;

        /* Create the parallax scrolling effect */
        background-attachment: fixed;
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }

    .w3-wide {letter-spacing: 10px;}
    .w3-hover-opacity {cursor: pointer;}

    /* Turn off parallax scrolling for tablets and phones */
   /* @media only screen and (max-device-width: 1600px) {
        .bgimg-1, .bgimg-2, .bgimg-3 {
            background-attachment: scroll;
            min-height: 400px;
        }
    }*/
</style>
<body>

<!-- Navbar (sit on top) -->


<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"> <span class="w3-hide-small">LAW</span> LIBRARY</span>
    </div>
</div>
{{--<div class="parallax"></div>--}}
<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
    <h3 class="w3-center">An online platform with enriched database of legal cases of Bangladesh</h3>
    <p>Today, more people are representing themselves in legal proceedings than anytime in the past. The library’s effort to provide limited legal help is part of a statewide movement to meet the ever-growing unmet legal needs of Washington residents.</p>
    {{--<div class="w3-row">
        <div class="w3-col m6 w3-center w3-padding-large">
            <p><b><i class="fa fa-user w3-margin-right"></i>My Name</b></p><br>
            <img src="/w3images/avatar_hat.jpg" class="w3-round w3-image w3-opacity w3-hover-opacity-off" alt="Photo of Me" width="500" height="333">
        </div>

        <!-- Hide this text on small devices -->
        <div class="w3-col m6 w3-hide-small w3-padding-large">
            <p>Welcome to my website. I am lorem ipsum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure
                dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor
                incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
        </div>
    </div>
    <p class="w3-large w3-center w3-padding-16">Im really good at:</p>
    <p class="w3-wide"><i class="fa fa-camera"></i>Photography</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:90%">90%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-laptop"></i>Web Design</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:85%">85%</div>
    </div>
    <p class="w3-wide"><i class="fa fa-photo"></i>Photoshop</p>
    <div class="w3-light-grey">
        <div class="w3-container w3-padding-small w3-dark-grey w3-center" style="width:75%">75%</div>
    </div>

    --}}

</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1400+</span><br>
        Crime Cases
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">555+</span><br>
        Civil Cases
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">890+</span><br>
        Writ Petition
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1500+</span><br>
        Traffic Cases
    </div>
</div>

<!-- Second Parallax Image with Portfolio Text -->
<div class="bgimg-2 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xxlarge w3-text-white w3-wide"></span>
    </div>
</div>

<!-- Container (Portfolio Section) -->
<div class="w3-content w3-container w3-padding-64" id="portfolio">
    <h3 class="w3-center">Ministry of Law, Justice and Parliamentary</h3>
    <p class="w3-center"><em>Ministry of Law, Justice and Parliamentary Affairs is a ministry of the government of the People's Republic of Bangladesh which deals with the management of the legal affairs, legislative activities, handles affairs relating to the Parliament of Bangladesh and administration of justice in Bangladesh through its two divisions: Law and Justice Division and the Legislative and Parliamentary Affairs Division respectively</em></p><br>
</div>

<!-- Modal for full size images on click-->
<div id="modal01" class="w3-modal w3-black" onclick="this.style.display='none'">
    <span class="w3-button w3-large w3-black w3-display-topright" title="Close Modal Image"><i class="fa fa-remove"></i></span>
    <div class="w3-modal-content w3-animate-zoom w3-center w3-transparent w3-padding-64">
        <img id="img01" class="w3-image">
        <p id="caption" class="w3-opacity w3-large"></p>
    </div>
</div>

<!-- Third Parallax Image with Portfolio Text -->
<div class="bgimg-3 w3-display-container w3-opacity-min">
    <div class="w3-display-middle">
        <span class="w3-xlarge w3-text-white w3-wide">ENORMOUS COLLECTION OF CASES </span>
    </div>
</div>

<!-- Container (Contact Section) -->
<div class="w3-content w3-container w3-padding-64" id="contact">
    <h3 class="w3-center">CONTACT US</h3>
    <p class="w3-center"><em>We'd love your feedback!</em></p>

    <div class="w3-row w3-padding-32 w3-section">
        <div class="w3-col m4 w3-container">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.120153925563!2d90.41709465029828!3d23.707402896259392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9aef47cd4fd%3A0x40af2ab7ffd071e6!2s29%20Justice%20Lal%20Mohan%20Das%20Lane%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1572806941704!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;width: 280px;height: 280px;" allowfullscreen=""></iframe>
        </div>
        <div class="w3-col m8 w3-panel">
            <div class="w3-large w3-margin-bottom">
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 29/1,2,3 Justice Lalmohon Daslane,Sutrapur,Dhaka-1100<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +8801511111224<br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: info@lawlibrary.com<br>
            </div>
            <p>Swing by for a cup of <i class="fa fa-coffee"></i>, or leave me a note:</p>
            <form action="/action_page.php" target="_blank">
                <div class="w3-row-padding" style="margin:0 -16px 8px -16px">
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Name" required name="Name">
                    </div>
                    <div class="w3-half">
                        <input class="w3-input w3-border" type="text" placeholder="Email" required name="Email">
                    </div>
                </div>
                <input class="w3-input w3-border" type="text" placeholder="Message" required name="Message">
                <button class="w3-button w3-black w3-right w3-section" type="submit">
                    <i class="fa fa-paper-plane"></i> SEND MESSAGE
                </button>
            </form>
        </div>
    </div>
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-64 w3-opacity w3-hover-opacity-off">
    <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
    <div class="w3-xlarge w3-section">
        <i class="fa fa-facebook-official w3-hover-opacity"></i>
        <i class="fa fa-instagram w3-hover-opacity"></i>
        <i class="fa fa-snapchat w3-hover-opacity"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity"></i>
        <i class="fa fa-twitter w3-hover-opacity"></i>
        <i class="fa fa-linkedin w3-hover-opacity"></i>
    </div>

</footer>

<script>
    // Modal Image Gallery
    function onClick(element) {
        document.getElementById("img01").src = element.src;
        document.getElementById("modal01").style.display = "block";
        var captionText = document.getElementById("caption");
        captionText.innerHTML = element.alt;
    }

    // Change style of navbar on scroll
    window.onscroll = function() {myFunction()};
    function myFunction() {
        var navbar = document.getElementById("myNavbar");
        if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
            navbar.className = "w3-bar" + " w3-card" + " w3-animate-top" + " w3-white";
        } else {
            navbar.className = navbar.className.replace(" w3-card w3-animate-top w3-white", "");
        }
    }

    // Used to toggle the menu on small screens when clicking on the menu button
    function toggleFunction() {
        var x = document.getElementById("navDemo");
        if (x.className.indexOf("w3-show") == -1) {
            x.className += " w3-show";
        } else {
            x.className = x.className.replace(" w3-show", "");
        }
    }
</script>


  {{--  <div class="owl-carousel slide-one-item">




      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/supreme_court.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-7 text-center">
              <h1>A Law Library</h1>
              <p class="text-white">An online platform with enriched database of legal cases of Bangladesh</p>
              <p><a href="login" class="btn btn-white-outline border-w-2 btn-md">Log In</a></p>




          </div>
          </div>
        </div>

      </div>

      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/home_image.jpg'); " >
        <div class="container">
          <div class="row align-items-center justify-content-center">
            <div class="col-md-12 col-lg-7 text-center">
              <h1>A Reinforced Law Library</h1>
              <p class="text-white"> Here you will find the popular judgments are passed by the
Honorable High court.</p>
              <p><a href="#" class="btn btn-white-outline border-w-2 btn-md">Popular Cases</a></p>
            </div>
          </div>
        </div>

      </div>


    </div>

    <section class="ftco-section ftco-no-pb services-section">
      <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/justice-civil-law.jpg'); " >
      <div class="container">
        <div class="row no-gutters d-flex">
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-auction"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">Ministry of Law, Justice and Parliamentary</a></h3>
              <p>Ministry of Law, Justice and Parliamentary Affairs is a ministry of the government of the People's Republic of Bangladesh which deals with the management of the legal affairs, legislative activities, handles affairs relating to the Parliament of Bangladesh and administration of justice in Bangladesh through its two divisions: Law and Justice Division and the Legislative and Parliamentary Affairs Division respectively</p>
            </div>
          </div>
          <div class="col-md-6 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="flaticon-lawyer"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">The pending cases</a></h3>
              <p>   More than 35.82 lakh cases are now pending with the higher and lower courts across the country, according to statistics placed by Law Minister.13.28 lakh civil cases and 17.25 lakh criminal cases were pending in lower courts. A total of 96,114 civil cases, 3.17 lakh criminal cases, 93,107 writs and appeals were pending at High Court Division.A total of 14,023 civil cases, 7,655 criminal cases, and 135 contempt petitions were pending at the Appellate Division.

            </div>
          </div>
          <div class="col-md-3 text-center services align-self-stretch ftco-animate p-4">
            <div class="icon"><span class="ion-ios-help-circle-outline"></span></div>
            <div class="media-body">
              <h3 class="heading mb-3"><a href="#">The Supreme Court of Bangladesh and divisions</a></h3>
              <p> The Supreme Court of Bangladesh is the highest court of law in Bangladesh. It is composed of the High Court Division and the Appellate Division, and was created by Part VI Chapter I of the Constitution of Bangladesh adopted in 1972. This is also the office of the Chief Justice, Appellate Division Justices, and High Court Division Justices of Bangladesh. As of October 2019, there are 7 Justices in Appellate Division and 100 (73 are permanent and 27 are additional) in High Court Division.
</p>
            </div>
          </div>
        </div>
      </div>
        </section>




        <footer class="ftco-footer ftco-bg-dark ftco-section">
          <div class="site-section-cover overlay img-bg-section" style="background-image: url('images/justice-civil-law.jpg'); " >
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Law Library</h2>
              <p>An online platform with enriched database of legal cases of Bangladesh
with search optimization</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Practice Areas</h2>
              <ul class="list-unstyled">
                <li><a href="login" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Crime Cases</a></li>
                <li><a href="login" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Civil Cases</a></li>
                <li><a href="login" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Writ Petition</a></li>
                <li><a href="login" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Suo-Muto</a></li>
                <li><a href="login" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Traffic Cases</a></li>

              </ul>
            </div>
          </div>

          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Have a Questions?</h2>
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">29/1,2,3 Justice Lalmohon Daslane,Sutrapur,Dhaka-1100</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">+8801521455637</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope"></span><span class="text">mashfiqurrr@gmail.com</span></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>

        </div>
      </div>
    </footer>--}}

    @endsection
