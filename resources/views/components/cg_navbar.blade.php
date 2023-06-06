<nav class="nav-custom navbar navbar-expand-lg sticky-top">
    <div class="container-md">
        <a class="navbar-brand centered-logo" href="{{ asset('/') }}">
            <img src="{{ asset('public/images/jcilogo.png') }}" width="140px" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarDarkNavDropdown"
            aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarDarkNavDropdown">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link  text-light" href="login">Login</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-light" href="#">Register</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
