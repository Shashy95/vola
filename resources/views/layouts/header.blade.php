<!-- start header -->
<header> 
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/logo.png') }}"  alt="" class="default-logo">
                    <img src="{{ asset('images/logo-dark.png') }}"  alt="" class="alt-logo">
                    <img src="{{ asset('images/logo-dark.png') }}"  alt="" class="mobile-logo"> 
                </a>
            </div>
            <div class="col-auto menu-order position-static">
                <button class="navbar-toggler float-start" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-label="Toggle navigation">
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                    <span class="navbar-toggler-line"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav"> 
                    <ul class="navbar-nav alt-font"> 
                        <li class="nav-item"><a href="{{ route('home') }}" class="nav-link {{ request()->routeIs('home') ? 'active' : '' }}">Home</a></li>
                        <li class="nav-item"><a href="{{ route('about') }}" class="nav-link {{ request()->routeIs('about') ? 'active' : '' }}">About</a></li>
                        <li class="nav-item dropdown dropdown-with-icon-style02">
                            <a href="{{ route('services') }}" class="nav-link {{ request()->routeIs('services') || request()->routeIs('service-details') ? 'active' : '' }}">Services</a>
                           
                        </li>
                       
                        <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-auto col-xxl-3 col-lg-2 text-end d-none d-sm-flex">
                 
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->