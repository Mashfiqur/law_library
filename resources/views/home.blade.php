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
        background-image: url('images/Law-Image.jpg');
        min-height: 500px;
    }

    /* Second image (Portfolio) */
    .bgimg-2 {
        background-image: url("images/vg3.jpg");
        min-height: 500px;
    }

    /* Third image (Contact) */
    .bgimg-3 {
        background-image: url("images/justice-civil-law.jpg");
        min-height: 500px;
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

    * {
  box-sizing: border-box;
}

body {
  font-family: Arial, Helvetica, sans-serif;
}

/* Float four columns side by side */
.column {
  float: left;
  width: 50%;
  padding: 200 100px;
}

/* Remove extra left and right margins, due to padding in columns */
.row {margin: 0 -5px;}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Style the counter cards */
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2); /* this adds the "card" effect */
  padding: 75px;
  text-align: center;
  background-color: #f1f1f1;
}

/* Responsive columns - one column layout (vertical) on small screens */
@media screen and (max-width: 600px) {
  .column {
    width: 100%;
    display: block;
    margin-bottom: 220px;
  }
}


</style>


<body>

<!-- Navbar (sit on top) -->


<!-- First Parallax Image with Logo Text -->
 <div class="owl-carousel slide-one-item">




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
           
        <div class="col-md-3 ">
           <div class="row">
  <div class="column">
    <div class="card">..</div>
  </div>
  <div class="column">
    <div class="card">..</div>
  </div>
  <div class="column">
    <div class="card">..</div>
  </div>
  <div class="column">
    <div class="card">..</div>
  </div>
</div> 
</div> 
</div>
        </div>

      </div>


    </div>
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
    <div class="w3-display-middle" style="white-space:nowrap;">
        <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity"> <span class="w3-hide-small">LAW</span> LIBRARY</span>
    </div>
</div>
{{--<div class="parallax"></div>--}}
<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
    <h1 class="w3-center"><i>Helpful and Time Efficient for Case Studies</i></h1>
    <p><i>This website is a great source for case studies, which will be helpful for not only law students as well as for the layers.One of the most important moto of this website is to save the valuable time of the user. By using this app the user will able to save their valuable time and as well as their money because they don’t have to go here and there to gather data of cases.</i> 
</p>
    

</div>

<div class="w3-row w3-center w3-dark-grey w3-padding-16">
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">200+</span><br>
        Crime Cases
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">255+</span><br>
        Civil Cases
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">190+</span><br>
        Writ Petition
    </div>
    <div class="w3-quarter w3-section">
        <span class="w3-xlarge">200+</span><br>
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
    <h3 class="w3-center"><i>Ministry of Law, Justice and Parliamentary</i></h3>
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

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3653.120153925563!2d90.41709465029828!3d23.707402896259392!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b9aef47cd4fd%3A0x40af2ab7ffd071e6!2s29%20Justice%20Lal%20Mohan%20Das%20Lane%2C%20Dhaka!5e0!3m2!1sen!2sbd!4v1572806941704!5m2!1sen!2sbd" width="600" height="450" frameborder="0" style="border:0;width: 280px;height: 350px;" allowfullscreen=""></iframe>
        </div>
        <div class="w3-col m8 w3-panel">
            <div class="w3-large w3-margin-bottom">
                <i class="fa fa-map-marker fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> 29/1,2,3 Justice Lalmohon Daslane,Sutrapur,Dhaka-1100<br>
                <i class="fa fa-phone fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Phone: +8801521455637<br>
                <i class="fa fa-envelope fa-fw w3-hover-text-black w3-xlarge w3-margin-right"></i> Email: mashfiqurrr@gmail.com<br>
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


  

    @endsection
