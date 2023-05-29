<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>News & Events</title>
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
  .background{
      background-image: linear-gradient(180deg, rgb(29, 29, 33),rgba(10, 10, 10, 0.363),rgba(232, 228, 236, 0), rgba(9, 9, 9, 0),rgba(9, 9, 9, 0)),url('./images/newsnevents.jpg');
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
  @media only screen and (max-width: 717px) {
    .title{
      display: none;
    }
    .border1{
      text-align: center;
    }
  }
  @media only screen and (min-width: 717px) {
    .title1{
      display: none;
    }
    .border1{
      margin-left: 55px;
      margin-right: 55px;
    }
  }

.border3{
  width: 100%;
  padding: 0;
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
                    <li><a href="/events" class="nav-link active">Events</a></li>
                    <li><a href="/programs" class="nav-link">Program</a></li>
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

	<!-- <h1 class="title" style="--duration: 1s;" >
		<span style="--delay: .5s">HIGHLIGHTS</span>
		</h1>
		<h1 class="title" style="--duration: 1s;" >
		<span style="--delay: .5s">Upcoming Events</span>
		</h1>	  
	-->
<section class="border1 mt-5 mb-4">
<h1 class="title" style="--duration: 1s;" >
		<span style="--delay: .5s">HIGHLIGHTS</span>
</h1>
<h1 class="title1" style="--duration: 1s;" >
  <span >HIGHLIGHTS</span>
</h1>
</section>

<!-- 1st section -->
<section>
  <div class="row m-4">
    <div class="card-group">


        <div class="col">
          <div class="card mb-3 border-0 shadow">
            <img src="./images/jcilogo.png" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text"><a href="#">View more</a></p>
              <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
            </div>
          </div>
        </div>


      <div class="col">
          <div class="border4 row row-cols-1 row-cols-md-2 g-4 mb-2">
            <div class="border4 col">
              <div class="border4 card border-0 shadow">
                <img src="./images/jcilogo.png" class="card-img-top" alt="...">
                <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"><a href="#">View more</a></p>
              </div>
            </div>
          </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img src="./images/jcilogo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"><a href="#">View more</a></p>
              </div>
            </div>
          </div>
      </div>

      <div class="row row-cols-1 row-cols-md-2 g-4">
        <div class="col">
          <div class="card border-0 shadow">
            <img src="./images/jcilogo.png" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text"><a href="#">View more</a></p>
          </div>
        </div>
      </div>

          <div class="col">
            <div class="card border-0 shadow">
              <img src="./images/jcilogo.png" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text"><a href="#">View more</a></p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!-- 2nd section -->
<section class="border1 mt-5 mb-4">
  <h1 class="title" style="--duration: 1s;" >
		<span style="--delay: .5s">Upcoming Events</span>
  </h1>
  <h1 class="title1" style="--duration: 1s;" >
		<span>Upcoming Events</span>
  </h1>
</section>
<!-- upcoming events -->
<section class="p-5 w-75 shadow" style="margin:auto;">
<div id="carouselExampleCaptions" class="carousel slide carousel-fade">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="./images/jcilogo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>First slide label</h5>
        <p>Some representative placeholder content for the first slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/jcilogo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Some representative placeholder content for the second slide.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="./images/jcilogo.png" class="d-block w-100" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Some representative placeholder content for the third slide.</p>
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</section>


<section class="border1 mt-5 mb-4">
  <h1 class="title" style="--duration: 1s;" >
		<span style="--delay: .5s">Recent Events</span>
	</h1>
  <h1 class="title1" style="--duration: 1s;" >
		<span>Recent Events</span>
	</h1>
</section>
<!-- recent news and updates -->
<section class="p-3" style="margin:auto;">
<div class="card-group">
  <div class="card m-2 border-0 shadow">
    <img src="./images/jcilogo.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card m-2 border-0 shadow">
    <img src="./images/jcilogo.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card m-2 border-0 shadow">
    <img src="./images/jcilogo.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
<div class="card-group ">
  <div class="card m-2 border-0 shadow">
    <img src="./images/jcilogo.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card m-2 border-0 shadow">
    <img src="./images/jcilogo.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This card has supporting text below as a natural lead-in to additional content.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card m-2 border-0 shadow">
    <img src="./images/jcilogo.png" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">Card title</h5>
      <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This card has even longer content than the first to show that equal height action.</p>
      <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div>
</section>
<!-- pagination -->
<section class="d-flex justify-content-center">
<nav aria-label="Page navigation example ">
  <ul class="pagination shadow">
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Previous">
        <span aria-hidden="true">&laquo;</span>
      </a>
    </li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#" aria-label="Next">
        <span aria-hidden="true">&raquo;</span>
      </a>
    </li>
  </ul>
</nav>
</section>



@include('components.Footer') 
@include('components.Script') 
</body>
</html>