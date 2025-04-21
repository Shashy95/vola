<nav id="mainNavbar" class="navbar navbar-expand-lg fixed-top bg-transparent transition py-3" style="backdrop-filter: none; z-index: 1055;">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home') }}">
            <img src="{{ asset('images/business-logo-white.png') }}" id="logo" alt="Logo" height="50">
        </a>
        <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navCollapse">
            <ul class="navbar-nav ms-auto" id="navLinks">
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('home') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('about') }}">About</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link text-white" href="{{ route('contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
