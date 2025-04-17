<!-- start header -->
<header> 
    <!-- start navigation -->
    <nav class="navbar navbar-expand-lg header-transparent bg-transparent header-reverse" data-header-hover="light">
        <div class="container-fluid">
            <div class="col-auto col-xxl-3 col-lg-2 me-lg-0 me-auto">
                <a class="navbar-brand" href="{{ route('home') }}">
                    <img src="{{ asset('images/business-logo-white.png') }}" data-at2x="{{ asset('images/business-logo-white@2x.png') }}" alt="" class="default-logo">
                    <img src="{{ asset('images/business-logo-black.png') }}" data-at2x="{{ asset('images/business-logo-black@2x.png') }}" alt="" class="alt-logo">
                    <img src="{{ asset('images/business-logo-black.png') }}" data-at2x="{{ asset('images/business-logo-black@2x.png') }}" alt="" class="mobile-logo"> 
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
                <div class="header-icon">
                    <div class="d-none d-xxl-inline-block me-25px xxl-me-10px"><div class="alt-font fs-15 xl-fs-13 widget-text fw-500"><span class="w-35px h-35px bg-base-color d-inline-block lh-36 me-10px border-radius-100px"><i class="feather icon-feather-phone me-10px"></i></span><a href="tel:1800222000" class="widget-text text-white-hover">1 800 222 000</a></div></div>
                    <div class="header-button"><a href="{{ route('contact') }}" class="btn btn-very-small btn-transparent-white-light btn-rounded">Get a quote</a></div>
                </div>  
            </div>
        </div>
    </nav>
    <!-- end navigation -->
</header>
<!-- end header -->