<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JCI MAKATI</title>
    <link rel="icon" type="image/png" sizes="32x24" href="{{ asset('public/images/jcilogo.png') }}">
    @include('components.Links')
    <link rel="stylesheet" href="{{ asset('public/assets/css/landing-page.css') }}">

    <style>
        .background {
            background-image: linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.6)), url({{ asset('public/images/hero2.png') }});
            min-height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .social {
            display: flex;
            justify-content: end;
        }

        .logo {
            width: 100px;
        }

        @media only screen and (min-width: 992px) {
            .logo {
                width: 100%;
            }
        }

        @media (max-width: 479px) {
            .background {
                min-height: 40dvh;
            }
        }

        @import url(https://fonts.googleapis.com/css?family=Raleway);



        .title {
            color: #1a1a1a;
            text-align: center;
            margin-bottom: 10px
        }

        .content {
            position: relative;
            width: 100%;
            max-width: 400px;
            margin: auto;
            overflow: hidden;
        }

        .content .content-overlay {
            background: rgba(0, 0, 0, 0.7);
            position: absolute;
            margin-bottom: 1rem;
            height: 99%;
            width: 100%;
            left: 0;
            top: 0;
            bottom: 0;
            right: 0;
            opacity: 0;
            -webkit-transition: all 0.4s ease-in-out 0s;
            -moz-transition: all 0.4s ease-in-out 0s;
            transition: all 0.4s ease-in-out 0s
        }

        .content:hover .content-overlay {
            opacity: 1
        }

        .content-image {
            width: 100%
        }

        /* img {
            box-shadow: 1px 1px 5px 1px rgba(0, 0, 0, 0.1);
            border-radius: 5px
        } */

        .content-details {
            position: absolute;
            text-align: center;
            padding-block: 1rem;
            width: 100%;
            top: 50%;
            left: 50%;
            opacity: 0;
            -webkit-transform: translate(-50%, -50%);
            -moz-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            -webkit-transition: all 0.3s ease-in-out 0s;
            -moz-transition: all 0.3s ease-in-out 0s;
            transition: all 0.3s ease-in-out 0s
        }

        .content:hover .content-details {
            top: 50%;
            left: 50%;
            opacity: 1
        }

        .content-details h3 {
            color: #fff;
            font-weight: 500;
            letter-spacing: 0.15em;
            margin-bottom: 0.5em;
            text-transform: uppercase
        }

        .content-details p {
            color: #fff;
            font-size: 0.8em
        }

        .fadeIn-bottom {
            top: 80%
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('components.home_navbar')

    <div class="background"></div>

    <!-- logo -->

    <!-- carousel text -->
    {{-- <section class="shadow">
        <section class="reveal fade-bottom">
            <div class="d-flex justify-content-center mt-2">
                <img class="w-25" src="{{ asset('public/images/jcilogo.png') }}" alt="">
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
    </section> --}}

    <!-- Advocacies -->
    {{-- <section class="reveal fade-bottom"
        style="background-image: url({{ asset('public/images/cglogobg.jpg') }}); background-repeat:no-repeat; background-size:100%;">
        <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <img src="{{ asset('public/images/cglogo.png') }}" class="img-fluid w-75 center cglogo reveal fade-left"
                alt="cglogo">
        </a>
    </section> --}}

    {{-- About --}}
    {{-- <section>
        <div class="container-fluid">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 col-sm-6 px-0">
                    <img src="{{ asset('public/images/about_jci.png') }}" width="750px" height="550px"
                        class="img-fluid" alt="" />
                </div>
                <div class="col-md-6 col-sm-6 px-0">
                    <div class="container-sm my-5 px-5">
                        <div class="d-flex flex-column px-sm-3">
                            <h2 class="fw-bold">ABOUT</h2>
                            <p>JCI Makati (Makati Jaycees) is one of the over 250 Local Today, JCI Makati
                                is
                                still one of
                                the
                                most prestigious effective leadership organizations in JCI. 2019 JCI Makati
                                President
                                Kurt
                                Ryan
                                J. Soliman is now at the forefront leading the local organization to greater heights
                                in
                                its
                                55th
                                year. His term has produced groundbreaking projects such as The 1st Kindergarten
                                Teachers
                                Empowerment Summit, JCSeeding in Plants, #WeMenCare Community Projects, Girl
                                Empowerment
                                Summit,
                                Cardrawling Project, Bean of Hope, Candrawling Project, Agri-Cool-Tour and JCI
                                Uplift
                                Training
                                Program, which was adopted early this year as a National Program by JCI Philippines.
                            </p>
                            <div class="d-flex justify-content-end">
                                <a href="{{ url('/about_us') }}" class="btn btn-warning">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container-fluid"
        style="background-image: linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.5) ), url('{{ asset('public/images/paperbg.jpg') }}')">
        <div class="container">
            <div class="row mx-auto">
                <h2 class=" my-4 text-light display-5">PROGRAMS</h2>
                <div class="col-lg-3 col-md-12 mb-4 mb-lg-0 pb-5">
                    <div class="content">
                        <a href="#">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/images/jci3.jpg') }}"
                                class="content-image w-100 shadow-1-strong rounded mb-4 img-fluid"
                                alt="Boat on Calm Water" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">JCI MAKATI</h3>
                                <p class="content-text"><i class="fa fa-map-marker"></i> Philippines</p>
                            </div>
                        </a>
                    </div>
                    <div class="content">
                        <a href="#">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/images/event4.jpg') }}"
                                class="content-image w-100 shadow-1-strong rounded img-fluid"
                                alt="Wintry Mountain Landscape" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">JCI MAKATI</h3>
                                <p class="content-text"><i class="fa fa-map-marker"></i> Philippines</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="content">
                        <a href="#">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/images/event2.jpg') }}"
                                class="content-image w-100 shadow-1-strong rounded mb-4 img-fluid"
                                alt="Boat on Calm Water" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">JCI MAKATI</h3>
                                <p class="content-text"><i class="fa fa-map-marker"></i> Philippines</p>
                            </div>
                        </a>
                    </div>
                    <div class="content">
                        <a href="#">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/images/event1.jpg') }}"
                                class="content-image w-100 shadow-1-strong rounded img-fluid"
                                alt="Boat on Calm Water" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">JCI MAKATI</h3>
                                <p class="content-text"><i class="fa fa-map-marker"></i> Philippines</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="content">
                        <a href="#">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/images/jci2.jpg') }}"
                                class="content-image w-100 shadow-1-strong rounded mb-4 img-fluid"
                                alt="Boat on Calm Water" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">JCI MAKATI</h3>
                                <p class="content-text"><i class="fa fa-map-marker"></i> Philippines</p>
                            </div>
                        </a>
                    </div>
                    <div class="content">
                        <a href="#">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/images/event5.jpg') }}"
                                class="content-image w-100 shadow-1-strong rounded img-fluid"
                                alt="Boat on Calm Water" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">JCI MAKATI</h3>
                                <p class="content-text"><i class="fa fa-map-marker"></i> Philippines</p>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-lg-3 mb-4 mb-lg-0">
                    <div class="content">
                        <a href="#">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/images/jci4.jpg') }}"
                                style="min-width:255px; min-height:173px;"
                                class="content-image w-100 shadow-1-strong rounded mb-4 img-fluid"
                                alt="Boat on Calm Water" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">JCI MAKATI</h3>
                                <p class="content-text"><i class="fa fa-map-marker"></i> Philippines</p>
                            </div>
                        </a>
                    </div>
                    <div class="content">
                        <a href="#">
                            <div class="content-overlay"></div>
                            <img src="{{ asset('public/images/jci6.webp') }}"
                                class="content-image w-100 shadow-1-strong rounded img-fluid"
                                alt="Boat on Calm Water" />
                            <div class="content-details fadeIn-bottom">
                                <h3 class="content-title">JCI MAKATI</h3>
                                <p class="content-text"><i class="fa fa-map-marker"></i> Philippines</p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- We Believe --}}
    {{-- <section class="py-5"
        style="background-image: url('{{ asset('public/images/jcilogo.png') }}'); background-repeat:no-repeat; background-size:contain; background-attachment: fixed; background-position: center;">
        <div class="container">
            <div>
                <div class="row my-5">
                    <h2 class="mb-3 fw-bold">WE BELIEVE</h2>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center p-5 text-light"
                            style="background-color: rgb(10, 15, 41)">
                            <h5>THAT ECONOMIC JUSTICE CAN BEST BE WON BY FREE MEN THROUGH FREE ENTERPRISE</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center p-5">
                            <h5>THAT GOVERNMENT SHOULD BE OF LAWS RATHER THAN OF MEN</h5>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center p-5">
                            <h5>THAT FAITH IN GOD GIVES MEANING AND PURPOSE TO HUMAN LIFE</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center p-5 text-light"
                            style="background-color: rgba(10, 15, 41)">
                            <h5>THAT SERVICE TO HUMANITY IS THE BEST WORK OF LIFE</h5>
                        </div>
                    </div>
                </div>
                <div class="row my-5">
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center p-5 text-light"
                            style="background-color: rgba(10, 15, 41)">
                            <h5>THAT THE BROTHERHOOD OF MEN TRANSCENDS THE SOVEREIGNTY OF NATIONS</h5>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="d-flex align-items-center p-5">
                            <h5>THAT EARTH’S GREAT TREASURE LIES IN HUMAN PERSONALITY</h5>
                        </div>
                    </div>
                </div>
    </section> --}}

    <!-- Modal -->
    {{-- <section>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content vh-100"
                    style="background-image: url('{{ asset('public/images/cglogobg.jpg') }}');">
                    <div class="modal-body line grow">
                        <img src="{{ asset('public/images/cglogo2.png') }}" class="pop-outin w-50 d-flex"
                            style="margin:auto; alt=" cglogo">
                        <section>
                            <div class="row text-center">
                                <div class="col">
                                    <a href="{{ url('/login') }}" style="color:white">
                                        <h4> Already a Click Green Warrior?<h4>
                                    </a>
                                </div>
                                <div class="col">
                                    <a href="{{ url('/member') }}" style="color:white">
                                        <h4> Be a Click Green Warrior!</h4>
                                    </a>
                                </div>
                            </div>
                        </section>

                        <!-- Know about click green -->
                        <section>
                            <a href="{{ url('/about') }}" style="color:white" class="mt-5 text-center">
                                <h4>Know more about Click Green!</h4>
                            </a>
                        </section>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}



    {{-- <section class="mt-5">
        <div class="container-fluid d-flex justify-content-center mb-3">
            <div class="gallery reveal fade-bottom">
                <img src="{{ asset('public/images/smdccircle.png') }}" alt="smdc logo">
                <img src="{{ asset('public/images/topyugocircle.png') }}" alt="topyugo logo">
                <img src="{{ asset('public/images/beautyvaultcircle.png') }}" alt="beautyvault logo">
                <img src="{{ asset('public/images/advocatecircle.png') }}" alt="advocate logo">
                <img src="{{ asset('public/images/glutacircle.png') }}" alt="glutalipo logo">
                <img src="{{ asset('public/images/takarahotelcircle.png') }}" alt="takara hotel logo">
                <img src="{{ asset('public/images/advocatecircle.png') }}" alt="advocate logo">
            </div>
        </div>
        <div>
            <p class="demotext text-center mb-5" style="font-size:45px">Sponsorships</p>
        </div>

    </section> --}}
    {{-- @include('components.Footer')
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
    </script> --}}

</body>

</html>
