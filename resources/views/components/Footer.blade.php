<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    /*----------------------STYLE-START------------------- */
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    footer {
        /*position: fixed; /*remove after editing*/
        background: #0A0F29;
        width: 100%;
        bottom: 0;
        left: 0;
    }

    footer::before {
        content: '';
        position: absolute;
        left: 0;
        top: 100px;
        height: 1px;
        width: 100%;
    }

    footer .footer-content {
        max-width: 1250px;
        margin: auto;
        padding: 30px 40px 40px 40px;
    }

    footer .footer-content .footer-top {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-bottom: 50px;
    }

    .footer-content .footer-top .logo-details {
        color: #fff;
        font-size: 30px;
    }

    .footer-content .footer-top .media-icons {
        display: flex;
    }

    .footer-content .footer-top .media-icons a {
        height: 40px;
        width: 40px;
        margin: 0 8px;
        border-radius: 50%;
        text-align: center;
        line-height: 40px;
        color: #fff;
        font-size: 17px;
        text-decoration: none;
        transition: all 0.4s ease;
    }

    .footer-top .media-icons a:nth-child(1) {
        background: #EDBD27;
    }

    .footer-top .media-icons a:nth-child(1):hover {
        color: #EDBD27;
        background: #fff;
    }

    .footer-top .media-icons a:nth-child(2) {
        background: #EDBD27;
    }

    .footer-top .media-icons a:nth-child(2):hover {
        color: #EDBD27;
        background: #fff;
    }

    .footer-top .media-icons a:nth-child(3) {
        background: #EDBD27;
    }

    .footer-top .media-icons a:nth-child(3):hover {
        color: #EDBD27;
        background: #fff;
    }

    .footer-top .media-icons a:nth-child(4) {
        background: #EDBD27;
    }

    .footer-top .media-icons a:nth-child(4):hover {
        color: #EDBD27;
        background: #fff;
    }

    .footer-top .media-icons a:nth-child(5) {
        background: #EDBD27;
    }

    .footer-top .media-icons a:nth-child(5):hover {
        color: #EDBD27;
        background: #fff;
    }

    footer .footer-content .footer-link-boxes {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    footer .footer-content .footer-link-boxes .footer-box {
        width: calc(100% / 5 - 10px);
    }

    .footer-content .footer-link-boxes .footer-box .link_name {
        color: #EDBD27;
        font-size: 18px;
        font-weight: 400;
        margin-bottom: 10px;
        position: relative;
    }

    .footer-link-boxes .footer-box .link_name::before {
        content: '';
        position: absolute;
        left: 0;
        bottom: -2px;
        height: 2px;
        width: 35px;
        background: #fff;
    }

    .footer-content .footer-link-boxes .footer-box li {
        margin: 6px 0;
        list-style: none;
    }

    .footer-content .footer-link-boxes .footer-box li a {
        color: #fff;
        font-size: 14px;
        font-weight: 400;
        text-decoration: none;
        opacity: 0.8;
        transition: all 0.4s ease
    }

    .footer-content .footer-link-boxes .footer-box li a:hover {
        opacity: 1;
        text-decoration: underline;
    }

    .footer-content .footer-link-boxes .input-box {
        margin-right: 55px;
    }

    .footer-link-boxes .input-box input {
        height: 40px;
        width: calc(100% + 55px);
        outline: none;
        border: 2px solid #AFAFB6;
        background: #093d5c;
        border-radius: 4px;
        padding: 0 15px;
        font-size: 15px;
        color: #fff;
        margin-top: 5px;
    }

    .footer-link-boxes .input-box input::placeholder {
        color: #AFAFB6;
        font-size: 16px;
    }

    .footer-link-boxes .input-box input[type="button"] {
        background: #fff;
        color: #140B5C;
        border: none;
        font-size: 18px;
        font-weight: 500;
        margin: 4px 0;
        opacity: 0.8;
        cursor: pointer;
        transition: all 0.4s ease;
    }

    .input-box input[type="button"]:hover {
        opacity: 1;
    }

    footer .footer-bottom-details {
        width: 100%;
        background: #edbe36;
    }

    footer .footer-bottom-details .footer-bottom_text {
        max-width: 1250px;
        margin: auto;
        padding: 20px 40px;
        display: flex;
        justify-content: space-between;
    }

    .footer-bottom-details .footer-bottom_text span,
    .footer-bottom-details .footer-bottom_text a {
        font-size: 14px;
        font-weight: 300;
        color: #fff;
        opacity: 0.8;
        text-decoration: none;
    }

    .footer-bottom-details .footer-bottom_text a:hover {
        opacity: 1;
        text-decoration: underline;
    }

    .footer-bottom-details .footer-bottom_text a {
        margin-right: 10px;
    }

    @media (max-width: 900px) {
        footer .footer-content .footer-link-boxes {
            flex-wrap: wrap;
        }

        footer .footer-content .footer-link-boxes .input-box {
            width: 40%;
            margin-top: 10px;
        }
    }

    @media (max-width: 700px) {
        footer {
            position: relative;
        }

        .footer-content .footer-top .logo-details {
            font-size: 26px;
        }

        .footer-content .footer-top .media-icons a {
            height: 35px;
            width: 35px;
            font-size: 14px;
            line-height: 35px;
        }

        footer .footer-content .footer-link-boxes .footer-box {
            width: calc(100% / 3 - 10px);
        }

        footer .footer-content .footer-link-boxes .input-box {
            width: 60%;
        }

        .footer-bottom-details .footer-bottom_text span,
        .footer-bottom-details .footer-bottom_text a {
            font-size: 12px;
        }
    }

    @media (max-width: 520px) {
        footer::before {
            top: 145px;
        }

        footer .footer-content .footer-top {
            flex-direction: column;
        }

        .footer-content .footer-top .media-icons {
            margin-top: 16px;
        }

        footer .footer-content .footer-link-boxes .footer-box {
            width: calc(100% / 2 - 10px);
        }

        footer .footer-content .footer-link-boxes .input-box {
            width: 100%;
        }

    }


    /*----------------------STYLE-END------------------- */
</style>





<footer>
    <div class="container footer-content">
        <div class="footer-top">
            <div class="logo-details">
                <span class="logo_name"><a href="index.php"><img src="{{ asset('public/images/jcilogo.png') }}"
                            style="height: 100px; width: 200px"></a></span>
            </div>

            <div class="media-icons">
                <a href="https://www.facebook.com/jcimakatiofficial" target="_blank"><i class="fa fa-facebook"></i></a>
                <a href="https://www.instagram.com/jcimakatiofficial/?hl=en" target="_blank"><i
                        class="fa fa-instagram"></i></a>
                <a href="https://twitter.com/jcimakati?lang=en" target="_blank"><i class="fa fa-twitter"></i></a>
                <a href="https://www.youtube.com/channel/UCyDXXq4xh50GLXsQ6_d5h-Q" target="_blank"><i
                        class="fa fa-youtube"></i></a>
                <a href="https://ph.linkedin.com/company/jci-makati" target="_blank"><i class="fa fa-linkedin"></i></a>

            </div>
        </div>

        <div class="row footer-link-boxes">
            <ul class="col-sm-4 col-md-3 footer-box w-100">
                <li class="link_name">JCI Makati</li>
                <li><a href="/about_us">About Us</a></li>
                <li><a href="project_page.php">Our Projects</a></li>
                <li><a href="/events">News & Events</a></li>
                <li><a href="/programs">Programs</a></li>
                <li><a href="/membership">Memberships</a></li>
                <li><a href="/contact_us">Contact Us</a></li>
            </ul>

            <ul class="col-sm-4 col-md-3 footer-box w-100">
                <li class="link_name">In partnership with:</li>
                <li><a href="#">Pit Master Inc.</a></li>
                <li><a href="https://smdc.com/" target="_blank" alt="SMDC Website Link">SMDC</a></li>
                <li><a href="#">The Millenial Concept Factory Inc.</a></li>
                <li><a href="https://glutalipo.com/" target="_blank" alt="Glutalipo Website Link">Glutalipo</a></li>
                <li><a href="https://www.facebook.com/beautyvaultphmain/" target="_blank"
                        alt="Beauty Vault FB Link">Beauty Vault</a></li>
                <li><a href="https://www.facebook.com/takarahotel/" target="_blank" alt="Takara Hotel FB">Takara
                        Hotel</a></li>
            </ul>
            <ul class="col-sm-4 col-md-3 footer-box w-100">
                <li><a href="#">Titans Inc.</a></li>
                <li><a href="#">The Hungry Minds Inc.</a></li>
                <li><a href="#">First Paragon Logistics International Inc.</a></li>
                <li><a href="https://www.topyugo.com/" target="_blank" alt="Topyugo Website Link">Topyugo Digital
                        Inc.</a></li>
                <li><a href="#">ICON</a></li>
                <li><a href="https://www.facebook.com/TeamAdvocateChangeClub/" target="_blank"
                        alt="Advocate Change Club FB Link">Advocate Change Club</a></li>
            </ul>

            <ul class="col-md-3 footer-box w-100">
                <li class="link_name">Contact Us</li>
                <li><a href="mailto:jcimakatiofficial@gmail.com">&#9993 Email</a></li>
                <li><a href="#">&#8481 239-6468</a></li>
                <li><a href="#">&#9990 0908-787-3888</a></li>
            </ul>

        </div>
    </div>

    <div class="footer-bottom-details">
        <div class="footer-bottom_text">
            <!--OTHER JCI WEBSITE ------https://www.jcimakati.com/-->
            <span class="copyright_text text-secondary"> Copyright © 2023 <a href="https://jcimakati.org/"
                    target="_blank" alt="JCI Makati Website" style="color: #0A0F29; font-weight: bold">JCI
                    Makati.</a>All rights reserved.</span>
            <span class="policy_terms">
                <a class="text-secondary" href="#">Privacy policy</a>
                <a class="text-secondary" href="#">Terms & conditions</a>
            </span>
        </div>
    </div>
</footer>
