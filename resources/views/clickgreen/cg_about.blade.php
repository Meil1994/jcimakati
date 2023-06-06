<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>>Click Green</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/8f74335642.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/clickgreen.css') }}">

    @include('components.Links')
</head>

<body
    style="height: 100dvh; 
background-image: linear-gradient(to top, rgba(0, 0, 0, 0), rgba(0, 0, 0, 0.4)), url('../../images/cglogobg.jpg'); 
background-repeat: no-repeat; background-size: cover; 
background-attachment: fixed;
background-position: center;">
    @include('components.cg_navbar')
    @include('components.cg_beawarrior_sect1')
    <main>
        <section>
            <div class="container">
                <div class="row my-5">

                    <div class="col-lg-9 col-md-8 col-sm-12">
                        <div class="container-fluid">
                            <h2 class="display-5 mb-4 fw-bolder text-light">Articles</h2>
                        </div>
                        <div class="row row-cols-1 row-cols-md-3 g-4">
                            <div class="col">
                                <div class="card-sm bg-light mx-auto h-100 " style="width: 225px">
                                    <img src="./images/jci1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">JCI Makati</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-sm bg-light mx-auto h-100 " style="width: 225px">
                                    <img src="./images/jci2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">JCI Makati</h5>
                                        <p class="card-text">This is a short card.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-sm bg-light mx-auto h-100 " style="width: 225px">
                                    <img src="./images/jci3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">JCI Makati</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-sm bg-light mx-auto h-100 " style="width: 225px">
                                    <img src="./images/jci1.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">JCI Makati</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-sm bg-light mx-auto h-100 " style="width: 225px">
                                    <img src="./images/jci3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">JCI Makati</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-sm bg-light mx-auto h-100 " style="width: 225px">
                                    <img src="./images/jci2.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">JCI Makati</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="card-sm bg-light mx-auto h-100 " style="width: 225px">
                                    <img src="./images/jci3.jpg" class="card-img-top" alt="...">
                                    <div class="card-body">
                                        <h5 class="card-title">JCI Makati</h5>
                                        <p class="card-text">This is a longer card with supporting text below as a
                                            natural lead-in to additional content. This content is a little bit longer.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- SIDE BAR --}}
                    <div class="col-lg-3 col-md-4 col-sm-12 mt-5">
                        <form action="" class="mb-5">
                            <div class="input-group mb-3">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="floatingInputGroup1"
                                        placeholder="Search">
                                    <label for="floatingInputGroup1">Search</label>
                                </div>
                                <span class="input-group-text">
                                    <a href="#">
                                        <i class="fa-solid fa-magnifying-glass" style="color: #696b6d;"></i></a>
                                </span>
                            </div>
                        </form>
                        <div class="py-3 card px-3 bg-dark">
                            <h4 class="d-flex text-secondary fw-bold mb-4">NEWSLETTER</h4>
                            <form action="">
                                <div class="form-floating mb-3">
                                    <input type="text" class="form-control" id="floatingInput"
                                        placeholder="name">
                                    <label for="floatingInput">Full name</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="email" class="form-control" id="floatingInput"
                                        placeholder="email">
                                    <label for="floatingInput">Email</label>
                                </div>
                                <div class="d-flex justify-content-end">
                                    <button class="btn btn-warning ">Subscribe</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    @include('components.Footer')
    <!-- JS SCRIPTS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>
