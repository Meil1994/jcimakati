<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Programs</title>
    @include('components.Links')
    <link rel="shortcut icon" type="image/png" href="{{ asset('./images/jci-3.png') }}">

    <style>
        .background {
            background-image: linear-gradient(180deg, rgb(29, 29, 33), rgba(10, 10, 10, 0.363), rgba(232, 228, 236, 0), rgba(9, 9, 9, 0), rgba(9, 9, 9, 0)), url('{{ asset('public/images/blogs.webp') }}');
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

        .border1 {
            border: 2px solid black;
        }

        @media only screen and (max-width: 575px) {
            .box1 {
                margin-top: 10px;
            }
        }
    </style>
</head>

<body>
    <section>
        @include('components.home_navbar')

        <div class="background"></div>

        <section>
            <div class="card-group p-3 pt-5">
                <div class="col">
                    <div class="card mb-3 border-0 shadow">
                        <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card mb-3 border-0 shadow">
                        <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content. This content is a little bit longer.</p>
                            <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div id="carouselExample" class="carousel slide carousel-fade">
                <!-- carousel slide 1 -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="card-group p-3 w-100">


                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- carousel slide 2 -->
                    <div class="carousel-item">
                        <div class="card-group p-3 w-100">
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card titles</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- carousel slide 3 -->
                    <div class="carousel-item">
                        <div class="card-group p-3 w-100">
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This content is a little bit longer.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card titles</h5>
                                    <p class="card-text">This card has supporting text below as a natural lead-in to
                                        additional content.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                            <div class="card mx-2 border-0 shadow">
                                <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural
                                        lead-in to additional content. This card has even longer content than the first
                                        to show that equal height action.</p>
                                    <p class="card-text"><small class="text-body-secondary"><a href="#">View
                                                more</a></small></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExample"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>




        <!-- 3rd row -->
        <section>
            <div class="row p-3">
                <div class="card-group">
                    <div class="col">
                        <div class="card mb-3 border-0 shadow h-100">
                            <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Card title</h5>
                                <p class="card-text"><a href="#">View more</a></p>
                                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins
                                        ago</small></p>
                            </div>
                        </div>
                    </div>
                    <div class="col box1">
                        <div class="row row-cols-1 row-cols-md-2 g-4 mb-2">
                            <div class="col">
                                <div class="card border-0 shadow">
                                    <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"><a href="#">View more</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 shadow">
                                    <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                        alt="...">
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
                                    <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                        alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">Card title</h5>
                                        <p class="card-text"><a href="#">View more</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card border-0 shadow">
                                    <img src="{{ asset('public/images/jcilogo.png') }}" class="card-img-top"
                                        alt="...">
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



        @include('components.Footer')
        @include('components.Script')
</body>

</html>
