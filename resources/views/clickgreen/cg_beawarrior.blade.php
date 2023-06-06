<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Click Green</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8f74335642.js" crossorigin="anonymous"></script>
    @include('components.Links')
    <link rel="stylesheet" href="{{ asset('public/assets/css/clickgreen.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Serif:wght@200&display=swap" rel="stylesheet">
    <style>

    </style>
</head>

<body>
    @include('components.cg_navbar')
    <main>
        <!-- hero section -->
        @include('components.cg_beawarrior_sect1')

        <!-- ABOUT -->
        <section class="d-flex align-items-center justify-content-center">
            <div class="container-sm">
                <div class="text-center mx-auto py-5" style="max-width: 600px;">
                    <div class="card-body ">
                        <h2 class="card-title text-center fs-1">ABOUT US</h2>
                        <div class="card-text"
                            style="font-size: 18px;font-family: 'Roboto Serif', serif; line-height:150%">CLICK
                            GREEN is a digital clean up
                            international
                            project that JCI Makati
                            launched thru its website. CLICK GREEN is the LO’s thematic concept and this year’s website
                            goal to be able to both promote JCI as an organization brand and Global Digital netizens to
                            take responsibility on their digital foot prints.
                            <br>
                            The website encourages site guests to commit in helping the environment recover by being
                            responsible members of the digital population. The primary purpose of this project is to
                            erase junk and unwanted emails and mobile text messages. By doing so, the participants can
                            help lessen the use of fossil fuel being consumed in powering server storages around the
                            world.
                            <br>
                            CLICK GREEN aims to reach global awareness to also lessen the effects of e-wastes that leads
                            to rapid climate change. Everything will be done with the participant’s commitment to delete
                            their junk and spam emails that has been idly sitting in their mail boxes for years and even
                            decades as well as sms messages that has been stored for years in their account.
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="d-flex align-items-center justify-content-center"
            style="height:100%; background-image: url('{{ asset('public/images/cglogobg.jpg') }}'); background-repeat: no-repeat; background-size: cover; background-attachment: fixed; background-position: center;">
            <div class="container-sm py-5 ">
                <div class="d-flex flex-column mx-lg-5 mx-sm-0">
                    <h2 class="fs-1 text-light text-center mb-5">ARTICLES</h2>
                    <div class="row row-cols-1 row-cols-md-3 g-4">
                        <div class="col">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('public/images/upevent6.jpg') }}" style="max-height:350px"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('public/images/upevent7.jpg') }}" style="max-height:350px"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a short card.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="card border-0 h-100">
                                <img src="{{ asset('public/images/upevent9.jpg') }}" style="max-height:350px"
                                    class="card-img-top img-fluid" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a longer card with supporting text below as a natural
                                        lead-in to additional content.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="d-flex flex-row-reverse my-3">
                        <a href="#" class="btn btn-lg btn-link text-light">See more <span class="ms-2"> <i
                                    class="fa-solid fa-angle-right"></i></span></a>
                    </div>
                </div>
            </div>
        </section>

        <section class="d-flex align-items-center justify-content-center my-5">
            <div class="container-sm">
                <div class="card border-0 shadow py-4" style="background-color: #56BDA3">
                    <h2 class="text-center mb-4 text-danger fw-bolder display-5">BE PART OF <br />
                        OUR BROTHERHOOD
                    </h2>
                    <div class="row">
                        <div class="col-sm-1 col-md-3 col-lg-3"></div>
                        <div class="col-sm-10 col-md-6 col-lg-6">
                            <form method="POST" action="/contact_us/send">
                                @csrf

                                <div class="form1 card-sm text-center border-0 form-border reveal fade-left">
                                    <div class="card-body justify-content-center">
                                        <div class="form-floating mb-3 my-text reveal fade-bottom" style="margin:auto;">
                                            <input name="first_name" required type="text"
                                                class="form-control rounded-2" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">First Name</label>
                                        </div>
                                        <div class="form-floating mb-3 my-text reveal fade-bottom" style="margin:auto;">
                                            <input name="last_name" required type="text" type="email"
                                                class="form-control rounded-2" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Last Name</label>
                                        </div>
                                        <div class="form-floating mb-3 my-text reveal fade-bottom" style="margin:auto;">
                                            <input name="contact" required type="number" class="form-control rounded-2"
                                                id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Contact Number</label>
                                        </div>
                                        <div class="form-floating mb-3 my-text reveal fade-bottom"
                                            style="margin:auto;">
                                            <input name="email" required type="email"
                                                class="form-control rounded-2" id="floatingInput"
                                                placeholder="name@example.com">
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                        <button type="submit"
                                            class=" mt-3 w-50 fade-bottom btn btn-warning mx-auto fw-bolder">Send</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="col-sm-1 col-md-3 col-lg-3"></div>
                    </div>
                </div>
            </div>
        </section>
        <div class="container-sm">
            <h2 class="slogan text-center mb-lg-5 mb-sm-3"
                style="font-family: 'Dancing Script', cursive; font-weight:bold;">
                Together let's <img class="slogan-logo" src="{{ asset('/images/cglogo.png') }}" width="200px"
                    alt=""> for
                a brighter future.
            </h2>
        </div>
    </main>
    @include('components.Footer')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
