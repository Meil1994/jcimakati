<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>
    {{-- FONTAWESOME --}}
    <script src="https://kit.fontawesome.com/8f74335642.js" crossorigin="anonymous"></script>
    @include('components.Links')
    <link rel="shortcut icon" type="image/png" href="{{ asset('./images/jci-3.png') }}">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@300&display=swap" rel="stylesheet">
</head>
<style>
    .my-text {
        -webkit-border-radius: 20px 20px 20px 20px;
        -moz-border-radius: 20px 20px 20px 20px;
        border-radius: 20px 20px 20px 20px;
    }

    .my-button {
        background: #edbe38;
        color: #0A0F29;
        font-size: 16px;
        line-height: 16px;
        padding: 10px;
        font-weight: normal;
        font-variant: normal;
        text-transform: none;
        border: 1px solid #0A0F29;
        display: inline-block;
    }

    .my-button:hover {
        border: 1px solid #0A0F29;
        background: #edbe38;
    }

    .my-button:active {
        background: #c08f08;
        color: white;
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

    .background {
        background-image: linear-gradient(180deg, rgb(29, 29, 33), rgba(10, 10, 10, 0.363), rgba(232, 228, 236, 0), rgba(9, 9, 9, 0), rgba(9, 9, 9, 0)), url('./images/hero3.png');
        height: 100vh;
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

    @media only screen and (min-width: 600px) {
        .form1 {
            border: 1px solid black;
            width: 590px;
            margin-left: auto;
            margin-right: auto;
        }
    }

    @media only screen and (max-width: 600px) {
        .form1 {
            margin: 10px;
        }
    }
</style>

<body>
    <!-- navbar -->
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
                                    <div class="d-inline-block d-lg-none ml-md-0 mr-auto py-3"><a href="#"
                                            class="site-menu-toggle js-menu-toggle text-white"><span
                                                class="icon-menu h3"></span></a></div>
                                    <ul class="site-menu main-menu js-clone-nav d-none d-lg-block">
                                        <li><a href="/" class="nav-link">Home</a></li>
                                        <li class="has-children"><a href="/about_us" class="nav-link">About Us</a>
                                            <ul class="dropdown arrow-top">
                                                <li><a href="#" class="nav-link">History</a></li>
                                                <li><a href="jci_ph.php" class="nav-link">JCI Philippines</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="/events" class="nav-link">Events</a></li>
                                        <li><a href="programs" class="nav-link">Programs</a></li>
                                        <li><a href="/membership" class="nav-link">Memberships</a></li>
                                        <li><a href="/contact_us" class="nav-link active">Contact Us</a></li>
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

    <!-- Email Subscription -->
    <section class="container-fluid py-3"
        style="background-image: linear-gradient(rgba(255, 255, 255, 0.8), rgba(255, 255, 255, 0.8) ), url('./images/Untitled design.png'); background-repeat: no-repeat;">
        <h1 class="text-center py-5 reveal fade-bottom">We'd Love to hear from you!</h1>

        <!-- form -->
        <div class="container">
            <div class="d-sm-flex justify-content-evenly align-items-center pb-5">
                <div class="pb-3 card-sm px-5 py-3 rounded-2" style="background-color: rgba(34, 74, 64, 0.5)">
                    <h4 style="font-family: 'Cormorant Garamond', serif; font-weight:800">CONTACTS</h4>
                    <div class="text-light"
                        style="font-family: 'Roboto Serif', serif; font-weight:400; font-size: 18px">
                        <div><i class="fa-solid fa-phone me-3 mb-2"></i> <span class=""> 239-6468</span></div>
                        <div><i class="fa-brands fa-google me-3 mb-2"></i> <span class="">sample@email.com</span>
                        </div>
                        <div><i class="fa-solid fa-location-dot me-3 mb-2"></i> <span class="">sample
                                address</span>
                        </div>
                        <div><i class="fa-brands fa-twitter me-3 mb-2"></i> <span class="">twitter.com</span>
                        </div>
                        <div><i class="fa-brands fa-facebook me-3 mb-2"></i> <span class="">facebook.com</span>
                        </div>
                        <div><i class="fa-brands fa-youtube me-3 mb-2"></i> <span class="">youtube.com</span>
                        </div>
                        <div><i class="fa-brands fa-linkedin-in me-3 mb-2"></i> <span
                                class="">Linkedin.com</span>
                        </div>
                    </div>
                </div>
                <form method="POST" action="/contact_us/send">
                    @csrf

                    <div class="form1 card-sm text-center border-0 form-border reveal fade-left">
                        <div class="card-body justify-content-center">
                            <div class="shadow form-floating mb-3 my-text reveal fade-bottom" style="margin:auto;">
                                <input name="first_name" required type="text" class="form-control rounded-2"
                                    id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">First Name</label>
                            </div>
                            <div class="shadow form-floating mb-3 my-text reveal fade-bottom" style="margin:auto;">
                                <input name="last_name" required type="text" type="email"
                                    class="form-control rounded-2" id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Last Name</label>
                            </div>
                            <div class="shadow form-floating mb-3 my-text reveal fade-bottom" style="margin:auto;">
                                <input name="contact" required type="number" class="form-control rounded-2"
                                    id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Contact Number</label>
                            </div>
                            <div class="shadow form-floating mb-3 my-text reveal fade-bottom" style="margin:auto;">
                                <input name="email" required type="email" class="form-control rounded-2"
                                    id="floatingInput" placeholder="name@example.com">
                                <label for="floatingInput">Email address</label>
                            </div>
                            <div class="shadow form-floating my-text reveal fade-bottom" style="margin:auto;">
                                <textarea name="comments" required class="form-control rounded-2" placeholder="Leave a comment here"
                                    id="floatingTextarea"></textarea>
                                <label for="floatingTextarea">Comments</label>
                            </div>
                            <button type="submit"
                                class=" mt-3 w-50 fade-bottom btn btn-warning mx-auto fw-bolder">Send</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>


    </section>


    <!-- MAP LOCATION -->
    <section>
        <div class="shadow-lg reveal fade-bottom">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15445.388867612533!2d120.9636808554199!3d14.579280300000006!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397ca2f4c341c03%3A0x642b10b0c3e01db6!2sJunior%20Chamber%20International%20(JCI)%20Manila!5e0!3m2!1sen!2sph!4v1683192451948!5m2!1sen!2sph"
                width="100%" height="450" style="border: 10px solid #1C6EA4;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>


    <style>
        .submit_button button {
            position: relative;
            margin: 20px;
            padding: 24px;
            border-radius: 30px;
            cursor: pointer;
            background-image: linear-gradient(to right, #0A0F29, #EDBD27);
            display: flex;
            justify-content: center;
            align-items: center;
            color: #fff;
            width: 100%;
        }
    </style>

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
