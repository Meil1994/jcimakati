<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us!</title>
    <link rel="shortcut icon" type="image/png" href="{{ asset('./images/jci-3.png') }}">
    @include('components.Links') 
</head>
  <style>
      .center {
      display: block;
      margin-left: auto;
      margin-right: auto;
      width: 50%;
    }
    .my-border{
      border: 10px solid #edbe38;
      border-radius: 5px 5px 5px 5px;
    }
    .demotext {
      color: #444444;
      background: #ffffff;
      text-shadow: 1px 0px 1px #cccccc, 0px 1px 1px #eeeeee, 2px 1px 1px #cccccc,
        1px 2px 1px #eeeeee, 3px 2px 1px #cccccc, 2px 3px 1px #eeeeee,
        4px 3px 1px #cccccc, 3px 4px 1px #eeeeee, 5px 4px 1px #cccccc,
        4px 5px 1px #eeeeee, 6px 5px 1px #cccccc, 5px 6px 1px #eeeeee,
        7px 6px 1px #cccccc;
      color: #444444;
      background: #ffffff;
    }
    .background{
    background-image: linear-gradient(180deg, rgb(29, 29, 33),rgba(10, 10, 10, 0.363),rgba(232, 228, 236, 0), rgba(9, 9, 9, 0),rgba(9, 9, 9, 0)),url('./images/MRKD.jpg');
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
    .top{
      font-size: 50px;
    }
    .image1{
      width: 90%;
      margin-left: 5%;
      margin-bottom: 0;
    }
    .text1{
      margin: 5%;
      font-size: 18px;
      font-weight: 250;
      margin-top: 15px;
    }
    @media only screen and (min-width: 800px) {
      .image1{
        width: 700px;
        margin-left: auto;
        margin-right: auto;
      }
      .text1{
        width: 700px;
        margin-left: auto;
        margin-right: auto;
      }
    }

  </style>
<body>

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
                  <li><a href="/" class="nav-link">Home</a></li>
                    <li class="has-children"><a href="/about_us" class="nav-link active">About Us</a>
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

    <div class="background"></div>

<!-- navbar end -->

<!-- BODY ABOUT US -->
<p class="top text-center mt-4 demotext">About Us!</p>
<section>
<img src="./images/grpimage.jpg" class="image1 img-fluid center my-border" alt="grpimage">
<p class="text1 mb-5" style="text-align: justify;">JCI Makati (Makati Jaycees) is one of the over 250 Local
   Organizations (LO’s) under JCI Philippines, belonging to the Metro South Area. It is an active and effective
  leadership organization in the progressive business community in the city of Makati, Philippines.
  It was organized on the 14th day of March 1964 with Marcos Aragon as its Charter President. 
  Over the years, the chapter has produced many outstanding projects like Bb.
  Pilipinas and Alay Lakad; adapted by both the local and national government and contributed its
  share of officers to the national and regional Jaycee organizations. In its 55 years of existence,
  JCI Makati has contributed significantly not only to the national organization but also to the Philippine's
  business landscape producing Industry Leaders. It has produced three (3) JCI Philippines National Presidents,
  Jose M. Barredo Jr., Gerry Sevilla and Crispin Dy, who also became one of six (6) Filipino JCI
  World Presidents in 1997. Notable Past Officers included Former Ten Outstanding Young Men (TOYM ) National
  Chairman Cesar Yatco, Chowking Founder and Former St. Luke’s Medical Center Board of Trustees Chairman Robert F.
  Kuan, Former Subic Bay Metropolitan Authority (SBMA) Chairman Felicito Payumo,
  Former PCSO Chairman Sergio Osmena and Landco Pacific Corporation Founder Alfred Xerez-Burgos.
</p>
<img src="./images/grpimage2.jpg" class="image1 img-fluid center my-border" alt="grpimage2">
<p class="text1 mb-5" style="text-align: justify;">JCI Makati (Makati Jaycees) is one of the over 250 Local
Today, JCI Makati is still one of the most prestigious effective leadership organizations in JCI. 2019 JCI Makati President Kurt Ryan J. Soliman is now at the forefront leading the local organization to greater heights in its 55th year. His term has produced groundbreaking projects such as The 1st Kindergarten Teachers Empowerment Summit, JCSeeding in Plants, #WeMenCare Community Projects, Girl Empowerment Summit, Cardrawling Project, Bean of Hope, Candrawling Project, Agri-Cool-Tour and JCI Uplift Training Program, which was adopted early this year as a National Program by JCI Philippines.
</p>
<p class="text1 mb-5" style="text-align: justify;">
  “Our aim is to provide the opportunity for young professionals to develop their skills in leadership, social responsibility, professional speaking, public relations and entrepreneurship necessary to create positive change. Our theme for 2019 is Empowered for Greatness. It follows what my Immediate Past President Pocholo  De Leon Gonzales have planted with his Greatness Within battle cry. Our commitment to the Vision 2020 that was set last year has led us to passionately create innovative programs and ground breaking strategies aimed to position us to achieve our goals this year. I strongly believe that JCI Makati is primed with an opportunity to inspire and enable our next generation of young leaders to create positive change within their community, friends and most importantly themselves. Our call for action forges a path for greatness that our Chapter to fully embrace its true potential.” Said 2019 JCI Makati President Kurt Soliman.
</p>

<p class="text1 mb-5" style="text-align: justify;">
As JCI Makati turns 55 and gears towards a new dimension in its Jaycee existence, it would continue to pursue determination and leadership excellence and the realization to be firmly rooted to the JCI creed.
</p>
</section>


@include('components.Footer') 
@include('components.Script') 
</body>
</html>