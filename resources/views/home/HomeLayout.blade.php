<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCI MAKATI</title>
    @include('components.Links')
    <link rel="stylesheet" href="./assets/css/landing-page.css">
    <link rel="shortcut icon" type="image/png" href="{{ asset('./images/jci-3.png') }}">

    <style>
      .background{
        background-image: linear-gradient(180deg, rgb(29, 29, 33),rgba(10, 10, 10, 0.363),rgba(232, 228, 236, 0), rgba(9, 9, 9, 0),rgba(9, 9, 9, 0)),url('./images/hero2.png');
        height: 100vh; 
        background-size: cover; 
        background-position: center; 
        background-repeat: no-repeat;
      }
      .social{
        display: flex;
        justify-content: end;
      }
      .logo{
        width: 100px;
      }
      @media only screen and (min-width: 992px) {
        .logo{
          width: 100%;
        }
      }
    </style>
</head>
<body>
    <!-- Navbar -->
  <section>
    <div class="site-mobile-menu site-navbar-target">
      <div class="site-mobile-menu-header">
        <div class="site-mobile-menu-close mt-3">
          <span class="icon-close2 js-menu-toggle"></span>
        </div>
      </div>
      <div class="site-mobile-menu-body"></div>
    </div> <!-- .site-mobile-menu -->
    
    <div class="site-navbar-wrap">
      <div class="site-navbar-top">
        <div class="container py-3">
          <div class="row align-items-center">
            <div class="col-6">
              <div class="d-flex mr-auto">
                <a href="#" class="d-flex align-items-center mr-4">
                    
                </a>
                <a href="#" class="d-flex align-items-center mr-auto">
                  <!-- <span class="icon-phone mr-2"></span>
                  <span class="d-none d-md-inline-block">+1 234 4567 8910</span> -->
                </a>
              </div>
            </div>
            <div class="col-6">
              <div class="social">
                <a href="#" class="p-2 pl-0"><span class="icon-twitter"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-facebook"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-linkedin"></span></a>
                <a href="#" class="p-2 pl-0"><span class="icon-instagram"></span></a>
              </div>
              
            </div>
          </div>
        </div>
      </div>

      <div class="site-navbar site-navbar-target js-sticky-header">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-2">
           <img class="logo my-0 site-logo mt-3" src="./images/jci-3.png" alt="">
              <!-- <h1 class="my-0 site-logo"><a href="index.html">JCI MAKATI</a></h1> -->
            </div>
            <div class="col-10">
              <nav class="site-navigation text-right" role="navigation">
                <div class="container">
                  <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
                  <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                    <li><a href="/" class="nav-link active">Home</a></li>
                    <li class="has-children"><a href="/about_us" class="nav-link">About Us</a>
                    <ul class="dropdown arrow-top">
                        <li><a href="#" class="nav-link">History</a></li>
                        <li><a href="jci_ph.php" class="nav-link">JCI Philippines</a></li>
                    </ul>
                    </li>
                    <li><a href="/events" class="nav-link">Events</a></li>
                    <li><a href="/programs" class="nav-link">Programs</a></li>
                    <li><a href="/membership" class="nav-link">Memberships</a></li>
                    <li><a href="/contact_us" class="nav-link">Contact Us</a></li>
                  </ul>
                </div>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="background"></div>

<!-- logo -->

<!-- carousel text -->
<section class="shadow">
<section class="reveal fade-bottom">
  <div class="d-flex justify-content-center mt-2">
    <img class="w-25" src="./images/jcilogo.png" alt="">
  </div>
</section>
<div class="container reveal fade-right">
    <div id="carouselContent" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active text-center p-4 demotext">
            <h1>"Developing leaders for a changing world"</h1>
            </div>
            <div class="carousel-item text-center p-4 demotext">
            <h1>"Desarrollando líderes para un mundo cambiante"</h1>
            </div>
            <div class="carousel-item text-center p-4 demotext">
            <h1>"Développer des leaders pour un monde en mutation"</h1>
            </div>
            <div class="carousel-item text-center p-4 demotext">
            <h1>"変化する世界に対応するリーダー育成"</h1>
            </div>
        </div>
    </div>
</div>
</section>

<!-- Advocacies -->
<section class="reveal fade-bottom" style="background-image:url('./images/cglogobg.jpg'); background-repeat:no-repeat; background-size:100%;">
  <img src="./images/cglogo.png" class="img-fluid w-75 center cglogo reveal fade-left" alt="cglogo">
</section>

<!-- Mission -->
<h1 class="text-center mt-5 reveal fade-bottom">JCI MISSION</h1>
<section class="d-flex justify-content-center mt-3 reveal fade-bottom">
<div class="card w-75 mb-3 border-0 shadow">
  <div class="card-body text-center">
    <p class="card-text">To Provide leadership development opportunities that empower young people to create positive change</p>
  </div>
</div>
</section>

<!-- Vision -->
<h1 class="text-center mt-5 reveal fade-bottom">JCI VISION</h1>
<section class="d-flex justify-content-center reveal fade-bottom ">
<div class="card w-75 mb-3 border-0 shadow">
<div class="card-body text-center">
    <p class="card-text">To be the foremost global network of young leaders</p>
  </div>
</div>
</section>

<!-- JCI Creed -->
<h1 class="text-center mt-5 reveal fade-bottom">JCI CREED</h1>
<section class="d-flex justify-content-center reveal fade-bottom">
<div class="card w-75 mb-3 border-0">
<div class="card-body text-center shadow reveal fade-left">
    <p class="card-text">We believe: That faith in God gives meaning and purpose to human life;</p>
</div>
<div class="card-body text-center shadow reveal fade-right">
    <p class="card-text">That the brotherhood of man transcends the sovereignty of nations;</p>
</div>
<div class="card-body text-center shadow reveal fade-left">
    <p class="card-text">That economic justice can best be won by free men through free enterprise;</p>
</div>
<div class="card-body text-center shadow reveal fade-right" >
    <p class="card-text">That government should be of laws rather than of men;</p>
</div>
<div class="card-body text-center shadow reveal fade-left">
    <p class="card-text">That earth’s great treasure lies in human personality;</p>
</div>
<div class="card-body text-center shadow reveal fade-right">
    <p class="card-text">And that service to humanity is the best work of life.</p>
</div>
</div>
</section>


<!-- WE BELIEVE -->
<h1 class="text-center mt-5 reveal fade-bottom">WE BELIEVE</h1>
<section class="d-flex justify-content-center">
<div class="card w-75 mb-3 border-0" style="text-align:justify;">

<div class="row">
  <div class="col">
<div class="card-body shadow h-100 reveal fade-bottom">
    <h5>THAT FAITH IN GOD GIVES MEANING AND PURPOSE TO HUMAN LIFE</h5>
    <p class="card-text">This organization shall refrain from sectarian or religious activities. The concept of “God” in the context of the JCI Creed it to be interpreted according to one’s own religious belief..</p>
</div>
  </div>
  <div class="col">
  <div class="card-body shadow reveal fade-right">
    <h5>THAT THE BROTHERHOOD OF MEN TRANSCENDS THE SOVEREIGNTY OF NATIONS</h5>
    <p class="card-text">That more can be accomplished toward world peace by the appreciation and acknowledgment of race, colors and creed of all men, than by the building of individual nations in to ones full of power to be feared by others.</p>
</div>
  </div>
</div>

<div class="row mt-4">
  <div class="col">
<div class="card-body shadow reveal fade-bottom">
    <h5>THAT ECONOMIC JUSTICE CAN BEST BE WON BY FREE MEN THROUGH FREE ENTERPRISE</h5>
    <p class="card-text">This association shall refrain from any partisan political activity. <br>
    The expression “Free Enterprise” is to be interpreted as: <br>
    – Expressing faith in the sanctity of freedom; <br>
    – Proclaiming belief in the basic nobility of human life; <br>
    – Protecting the right of the individual to live in dignity; <br>
    – Providing for each individual the opportunity to develop his or her maximum potential within his/her own society. <br>
    – That no man can be truly free unless he is free from economic bondage.</p>
</div>
  </div>
</div>

<div class="row mt-4">
  <div class="col">
<div class="card-body h-100 shadow reveal fade-left">
    <h5>THAT GOVERNMENT SHOULD BE OF LAWS RATHER THAN OF MEN</h5>
    <p class="card-text">That rule of the people through the people’s representatives who govern by the people’s law is the only way for a nation to prosper.</p>
</div>
  </div>
  <div class="col">
  <div class="card-body shadow reveal fade-right">
    <h5>THAT EARTH’S GREAT TREASURE LIES IN HUMAN PERSONALITY</h5>
    <p class="card-text">Jayceeism seeks as its primary objectives, the development of leaders. This is based on the firm belief that leadership is learned through active participation in internal and external activities.</p>
</div>
  </div>
</div>

<div class="row mt-4">
  <div class="col">
<div class="card-body shadow reveal fade-bottom">
    <h5>THAT SERVICE TO HUMANITY IS THE BEST WORK OF LIFE</h5>
    <p class="card-text">That by dispelling selfish thoughts from the mind and devoting life to the betterment of the community, we will play in making this world of ours much better place in which to live.
</div>
  </div>
</div>

</div>
</section>




<section class="mt-5">
<div class="container-fluid d-flex justify-content-center mb-3">
<div class="gallery reveal fade-bottom">
  <img src="./images/topyugocircle.png" alt="topyugo logo">
  <img src="./images/smdccircle.png" alt="smdc logo">
  <img src="./images/beautyvaultcircle.png" alt="beautyvault logo">
  <img src="./images/advocatecircle.png" alt="advocate logo">
  <img src="./images/glutacircle.png" alt="glutalipo logo">
  <img src="./images/takarahotelcircle.png" alt="takara hotel logo">
  <img src="./images/advocatecircle.png" alt="advocate logo">
</div>
</div>
<div><p class="demotext text-center mb-5" style="font-size:45px">Sponsorships</p></div> 
<section>

</section>
@include('components.Footer') 
@include('components.Script') 

<script>
  function reveal() {
  var reveals = document.querySelectorAll(".reveal");

  for (var i = 0; i < reveals.length; i++) {
    var windowHeight = window.innerHeight;
    var elementTop = reveals[i].getBoundingClientRect().top;
    var elementVisible = 0;

    if (elementTop < windowHeight - elementVisible) {
      reveals[i].classList.add("active");
    } else {
      reveals[i].classList.remove("active");
    }
  }
}
window.addEventListener("scroll", reveal);
</script>

</body>
</html>