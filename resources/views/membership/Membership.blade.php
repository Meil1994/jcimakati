<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Memberships</title>
  @include('components.Links')
  <link rel="shortcut icon" type="image/png" href="{{ asset('./images/jci-3.png') }}">
</head>
<style>

  .title span{	
	--total: calc(var(--duration)
	+ var(--delay));
	position: relative;
	display: block;
	color: transparentText 1s
	var(--total) forwards;
	}
	.title span::after {
		content: '';
		position: absolute;
		top: 0;
		left: 0;
		width: 48.5%;
		height: 100%;
		transform: scaleX(0);
		transform-origin: left;
		background: #0A0F29;
		animation:
		rollIn var(--duration)
		var(--delay)forwards,
		rollOut var(--duration)
		var(--total)forwards;
	}
	.title span:nth-child(2)::after{
		border-top: 3px solid #0A0F29;
	}
	@keyframes reavealText {
		to{
			color: #fff;
		}
	}
	@keyframes rollIn {
		from{
			transform: scaleX(0);
		}
		to{
			transform:scaleX(1);
		}
	}
	@keyframes rollOut {
		from {
			transform: translateX(0);
		}
		to {
			transform: translateX(105%);
		}
	}

  .reveal {
  position: relative;
  opacity: 0;
}
.reveal.active {
  opacity: 1;
}
.active.fade-bottom {
  animation: fade-bottom 0.4s ease-in;
}
.active.fade-left {
  animation: fade-left 0.4s ease-in-out;
}
.active.fade-right {
  animation: fade-right 0.4s ease-in;
}
@keyframes fade-bottom {
  0% {
    transform: translateY(50px);
    opacity: 0;
  }
  100% {
    transform: translateY(0);
    opacity: 1;
  }
}
@keyframes fade-left {
  0% {
    transform: translateX(-100px);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

@keyframes fade-right {
  0% {
    transform: translateX(100px);
    opacity: 0;
  }
  100% {
    transform: translateX(0);
    opacity: 1;
  }
}

@media only screen and (min-width: 580px) {
  .title1{
    display:none;
  }
  .Executive{
    margin: 20px;
  }
  .Immediate{
    margin: 20px;
  }
  .Vice{
    margin: 20px;
  }
  .External{
    margin: 20px;
    margin-top: 0;
  }
  .Membership{
    margin: 20px;
    margin-top: 0;
  }
  .Community{
    margin: 20px;
    margin-top: 0;
  }
  .Secretary{
    margin: 20px;
    margin-top: 0;
  }
  .Treasurer{
    margin: 20px;
    margin-top: 0;
  }
  .Director{
    margin: 20px;
    margin-top: 0;
  }
  .Development{
    margin: 20px;
    margin-top: 0;
  }
  .Professional{
    margin: 20px;
    margin-top: 0;
  }
  .Relations{
    margin: 20px;
    margin-top: 0;
  }
  .Onboarding{
    margin: 20px;
    margin-top: 0;
  }
  .DCommunity{
    margin: 20px;
    margin-top: 0;
  }
}

@media only screen and (min-width: 576px) {
 .exec{
  padding: 10px;
 }
}

@media only screen and (min-width: 720px) {
 .exec{
  padding: 30px;
 }
}

@media only screen and (min-width: 847px) {
 .exec{
  padding: 100px;
  padding-top: 20px;
  padding-bottom: 0;
 }
}

@media only screen and (min-width: 920px) {
 .exec{
  padding: 200px;
  padding-top: 20px;
  padding-bottom: 0;
 }
}

@media only screen and (min-width: 1000px) {
 .exec{
  padding: 230px;
  padding-top: 20px;
  padding-bottom: 0;
 }
}

.president{
    width: 25%;
  }
@media only screen and (max-width: 900px) {
  .president{
    width: 40%;
  }
}
@media only screen and (max-width: 662px) {
  .president{
    width: 50%;
  }
}
@media only screen and (max-width: 576px) {
  .president{
    width: 60%;
  }
  .Immediate{
    width: 56%;
    margin-left: 22%;
  }
  .Executive{
    width: 56%;
    margin-left: 22%;
  }
  .Vice{
    width: 56%;
    margin-left: 22%;
  }
  .External{
    width: 56%;
    margin-left: 22%;
  }
  .Membership{
    width: 56%;
    margin-left: 22%;
  }
  .Community{
    width: 56%;
    margin-left: 22%;
  }
  .Secretary{
    width: 56%;
    margin-left: 22%;
  }
  .Treasurer{
    width: 56%;
    margin-left: 22%;
  }
  .Director{
    width: 56%;
    margin-left: 22%;
  }
  .Development{
    width: 56%;
    margin-left: 22%;
  }
  .Professional{
    width: 56%;
    margin-left: 22%;
  }
  .Relations{
    width: 56%;
    margin-left: 22%;
  }
  .Onboarding{
    width: 56%;
    margin-left: 22%;
  }
  .DCommunity{
    width: 56%;
    margin-left: 22%;
  }
}
@media only screen and (min-width: 580px) {
  .Executive{
    margin: 20px;
  }
  .Immediate{
    margin: 20px;
  }
  .Vice{
    margin: 20px;
  }
  .External{
    margin: 20px;
    margin-top: 0;
  }
  .Membership{
    margin: 20px;
    margin-top: 0;
  }
  .Community{
    margin: 20px;
    margin-top: 0;
  }
  .Secretary{
    margin: 20px;
    margin-top: 0;
  }
  .Treasurer{
    margin: 20px;
    margin-top: 0;
  }
  .Director{
    margin: 20px;
    margin-top: 0;
  }
  .Development{
    margin: 20px;
    margin-top: 0;
  }
  .Professional{
    margin: 20px;
    margin-top: 0;
  }
  .Relations{
    margin: 20px;
    margin-top: 0;
  }
  .Onboarding{
    margin: 20px;
    margin-top: 0;
  }
  .DCommunity{
    margin: 20px;
    margin-top: 0;
  }
  .dir{
  padding: 50px;
  padding-top: 0;
  }
}
@media only screen and (min-width: 1050px) {
  .dir{
  padding: 100px;
  padding-top: 0;
  }
}
@media only screen and (min-width: 1150px) {
  .dir{
  padding: 180px;
  padding-top: 0;
  }
}
@media only screen and (max-width: 726px) {
  .title{
    display:none;
  }
  .title1{
    display:block;
  }
}
@media only screen and (min-width: 726px) {
  .form1{
    width: 50%;
    margin-left: 25%;
  }
}
@media only screen and (max-width: 726px) {
  .form1{
    width: 90%;
    margin-left: 5%;
  }
}
.font{
  font-size: 20px;
  font-weight: light;
}
.background{
  background-image: linear-gradient(180deg, rgb(29, 29, 33),rgba(10, 10, 10, 0.58),rgba(232, 228, 236, 0), rgba(9, 9, 9, 0),rgba(9, 9, 9, 0)),url('./images/1.jpg');
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
<body>
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
                      <li><a href="/" class="nav-link ">Home</a></li>
                      <li class="has-children"><a href="/about_us" class="nav-link">About Us</a>
                      <ul class="dropdown arrow-top">
                          <li><a href="#" class="nav-link">History</a></li>
                          <li><a href="jci_ph.php" class="nav-link">JCI Philippines</a></li>
                      </ul>
                      </li>
                      <li><a href="/events" class="nav-link">Events</a></li>
                      <li><a href="/programs" class="nav-link">Programs</a></li>
                      <li><a href="/membership" class="nav-link active">Memberships</a></li>
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

  <section class="mt-5 mb-5 px-5 reveal fade-left">
    <h1 class="title" style="--duration: 1s;" >
        <span style="--delay: .5s">Board of Directors</span>
    </h1>
    <h1 class="title1" style="--duration: 1s;" >
      <span style="--delay: .5s">Board of Directors</span>
    </h1>
  </section> 
  <!-- row 1 -->
  <section class="reveal fade-bottom">
    <div class="president card" style="margin:auto;">
      <img src="./images/president.png" class="card-img-top" alt="...">
      <h3 class="font text-center mt-2">President</h3>
    </div>
  </section>
  <!-- row 2 -->
  <section class="exec mt-5 reveal fade-bottom">
    <div class="card-group" style="margin:auto;">

      <div class="Immediate card border-0" >
        <img src="./images/Picture2.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Immediate Past President</h3>
      </div>
      
      <div class="Executive card border-0" >
        <img src="./images/Picture3.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Executive Vice President</h3>
      </div>

      <div class="Vice card border-0" >
        <img src="./images/Picture4.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Vice President - Internal</h3>
      </div>
    </div>
  </section>

  <section class="exec mt-5 reveal fade-bottom">
    <div class="card-group" style="margin:auto;">
      <div class="External card border-0" >
        <img src="./images/Picture5.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Vice President - External</h3>
      </div>
      
      <div class="Membership card border-0" >
        <img src="./images/Picture6.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Vice President - Membership</h3>
      </div>

      <div class="Community card border-0" >
        <img src="./images/Picture7.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Vice President - Community</h3>
      </div>
    </div>
  </section>

  <section class="exec mt-0 reveal fade-bottom">
    <div class="card-group" style="margin:auto;">
      <div class="Secretary card border-0" >
        <img src="./images/Picture8.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Executive Secretary</h3>
      </div>
      
      <div class="Treasurer card border-0" >
        <img src="./images/Picture9.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Executive Treasurer</h3>
      </div>

      <div class="Director card border-0" >
        <img src="./images/Picture10.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Executive Director</h3>
      </div>
    </div>
  </section>

  <section class="exec mt-0 reveal fade-bottom">
    <div class="card-group" style="margin:auto;">
      <div class="Development card border-0" >
        <img src="./images/Picture12.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Local Skills Development Director</h3>
      </div>
      
      <div class="Professional card border-0" >
        <img src="./images/Picture13.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Director for Professional Development</h3>
      </div>

      <div class="Relations card border-0" >
        <img src="./images/Picture14.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">National Relations Director </h3>
      </div>
    </div>
  </section>

  <section class="exec mt-0 reveal fade-bottom">
    <div class="dir card-group" style="margin:auto;">
      <div class="Onboarding card border-0" >
        <img src="./images/Picture15.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Director for Recruitment and Onboarding</h3>
      </div>
      
      <div class="DCommunity card border-0" >
        <img src="./images/Picture16.jpg" class="card-img-top" alt="...">
        <h3 class="font text-center mt-2">Director for Community</h3>
      </div>
    </div>
  </section>

  <section class="mt-5 mb-4 px-5 reveal fade-left">
    <h1 class="title" style="--duration: 1s;" >
        <span style="--delay: .5s">Why JCI Makati</span>
    </h1>
    <h1 class="title1" style="--duration: 1s;" >
      <span style="--delay: .5s">Why JCI Makati</span>
    </h1>
  </section>

  <!-- carousel for video -->
  <section class="d-flex justify-content-center shadow reveal fade-bottom">
    <div id="carouselExampleIndicators" class="carousel slide" style="margin:auto;" >
      <div class="carousel-indicators" style="margin-bottom:10px;">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner w-100 p-2" >
        <div class="carousel-item active">
          <video class="w-100" controls poster="./images/jcilogo.png">
            <source src="./videos/JCIMAKATIPRESENTATION.mp4" type="video/mp4" >
          </video>
        </div>
        <div class="carousel-item">
          <video class="w-100" controls poster="./images/jcilogo.png">
            <source src="./videos/JCIMAKATIPRESENTATION2.mp4" type="video/mp4">
          </video>
        </div>
        
        <div class="carousel-item">
          <video class="w-100" controls poster="./images/jcilogo.png">
            <source src="./videos/JCIMAKATIPRESENTATION3.mp4" type="video/mp4">
          </video>
        </div>
      </div>
    </div>
  </section>


  <section>
    <h1 class="text-center mt-5 mb-4 reveal fade-bottom" style="font-size:60px;">Be one of us!</h1>
  </section>

  <!-- form -->
  <form
  method="POST" 
  action="/membership/send">
  @csrf

    <div class="form1 card text-center form-border mb-5 border-dark reveal fade-left">
      <div class="card-body justify-content-center" >
        <div class="form-floating mb-3 my-text reveal fade-bottom">
          <input 
            name="first_name"
            required
            type="text" 
            class="form-control rounded-2" 
            id="floatingInput" 
            placeholder="name@example.com">

          <label for="floatingInput">Fist Name</label>
        </div>

        <div class="form-floating mb-3 my-text reveal fade-bottom">
          <input 
            name="last_name"
            required
            type="text" 
            class="form-control rounded-2" 
            id="floatingInput" 
            placeholder="name@example.com">

          <label for="floatingInput">Last Name</label>
        </div>

        <div class="form-floating mb-3 my-text reveal fade-bottom">
          <input 
            name="contact"
            required
            type="number" 
            class="form-control rounded-2" 
            id="floatingInput" 
            placeholder="name@example.com">

          <label for="floatingInput">Contact Number</label>
        </div>

        <div class="form-floating mb-3 my-text reveal fade-bottom">
          <input 
            name="email"
            required
            type="email" 
            class="form-control rounded-2" 
            id="floatingInput" 
            placeholder="name@example.com">

          <label for="floatingInput">Email address</label>
        </div>

        <div class="form-floating my-text reveal fade-bottom">
          <textarea 
            name="reason"
            required
            class="form-control rounded-2" 
            placeholder="Leave a comment here" 
            id="floatingTextarea"></textarea>

          <label for="floatingTextarea">Why do you want to join?</label>
        </div>
        <button type="submit" class="btn btn-primary mt-3 pl-5 pr-5">Submit</button>
      </div>
    </div>

  </form>



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