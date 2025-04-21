@extends('layouts.app')

@section('content')
<section class="section-dark p-0 bg-dark-gray"> 
    <div class="swiper lg-no-parallax magic-cursor  full-screen md-h-600px sm-h-500px ipad-top-space-margin swiper-light-pagination" data-slider-options='{ "slidesPerView": 1, "loop": true, "parallax": true, "speed": 1000, "pagination": { "el": ".swiper-pagination-bullets", "clickable": true }, "navigation": { "nextEl": ".slider-one-slide-next-1", "prevEl": ".slider-one-slide-prev-1" }, "autoplay": { "delay": 4000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "slide" }'>
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('https://via.placeholder.com/1920x1100');">
                    <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                    <div class="container h-100" data-swiper-parallax="-500">
                        <div class="row align-items-center h-100">
                            <div class="col-xl-7 col-lg-8 col-md-10 position-relative text-white text-center text-md-start" data-anime='{ "el": "childs", "translateX": [100, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                                <div>
                                    <span class="fs-20 opacity-6 mb-25px sm-mb-15px d-inline-block fw-300">Best solutions for your business</span>
                                </div>
                                <h1 class="alt-font w-90 xl-w-100 text-shadow-double-large ls-minus-2px">Agency for your <span class="fw-600">great business.</span></h1>
                                <a href="index.html" target="_blank" class="btn btn-extra-large btn-rounded with-rounded btn-base-color btn-box-shadow box-shadow-extra-large mt-20px sm-mt-0">Get started now<span class="bg-white text-base-color"><i class="fas fa-arrow-right"></i></span></a>
                            </div>
                        </div>
                        <div class="position-absolute bottom-minus-45px" data-anime='{ "translateY": [150, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'><span class="alt-font number text-base-color opacity-3 fs-190 fw-600 ls-minus-5px">01</span></div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->
            <!-- start slider item -->
           
            <!-- end slider item -->
            <!-- start slider item -->
            
            <!-- end slider item -->
        </div>
        <!-- start slider pagination -->
        <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
        <!-- end slider pagination -->
        <!-- start slider navigation -->
        <!--<div class="slider-one-slide-prev-1 icon-extra-large text-white swiper-button-prev slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutLeft"></i></div>
            <div class="slider-one-slide-next-1 icon-extra-large text-white swiper-button-next slider-navigation-style-06 d-none d-sm-inline-block"><i class="line-icon-Arrow-OutRight"></i></div>-->
        <!-- end slider navigation -->
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="border-bottom border-color-extra-medium-gray pt-40px pb-40px overflow-hidden">
    <div class="container">
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center align-items-center" data-anime='{ "el": "childs", "translateX": [-15, 0], "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
            <!-- start features box item -->
            <div class="col icon-with-text-style-08 md-mb-30px text-center text-sm-start">
                <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-shield-check icon-very-medium text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fw-500 text-dark-gray d-block lh-26">World-class services</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-08 md-mb-30px text-center text-sm-start">
                <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-hourglass icon-very-medium text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fw-500 text-dark-gray d-block lh-26">Experience strategy</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-08 xs-mb-30px text-center text-sm-start">
                <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-award icon-very-medium text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fw-500 text-dark-gray d-block lh-26">Award winning agency</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
            <!-- start features box item -->
            <div class="col icon-with-text-style-08 text-center text-sm-start">
                <div class="feature-box feature-box-left-icon-middle d-inline-flex align-middle">
                    <div class="feature-box-icon me-10px">
                        <i class="bi bi-briefcase icon-very-medium text-base-color"></i>
                    </div>
                    <div class="feature-box-content">
                        <span class="alt-font fw-500 text-dark-gray d-block lh-26">Grow your business</span>
                    </div>
                </div>
            </div>
            <!-- end features box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-8 md-pb-17 xs-pb-28">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-12 col-lg-12 col-md-12 md-mb-50px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Our Films</span>
                <div class="position-relative">
                    <button class="btn position-absolute top-50 start-0 translate-middle-y z-2" id="filmsScrollLeft" aria-label="Scroll Left">
                        <i class="bi bi-chevron-left"></i>
                    </button>
                    <button class="btn position-absolute top-50 end-0 translate-middle-y z-2" id="filmsScrollRight" aria-label="Scroll Right">
                        <i class="bi bi-chevron-right"></i>
                    </button>
        
                    <div class="d-flex overflow-auto px-5" id="filmsCarousel" style="gap: 1.5rem; scroll-behavior: smooth;">
                        @foreach (range(1, 6) as $i)
                            <div class="flex-shrink-0" style="width: 300px;">
                                <div class="card h-100">
                                    <div class="position-relative">
                                        <a href="">
                                        <img src="{{ asset('images/sample.jpg') }}" class="card-img-top" alt="Film {{ $i }}">
                                      </a>
                                    </div>
                                   
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>                   
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-solitude-blue">
    <div class="container">
        <div class="row justify-content-center mb-4">
            <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                <h4 class="alt-font text-dark-gray fw-600 ls-minus-1px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>AWARDS</h4>
            </div>
        </div>
        <div class="row align-items-center" data-anime='{ "el": "childs", "translateY": [0, 0], "opacity": [0,1], "duration": 1200, "delay": 150, "staggervalue": 300, "easing": "easeOutQuad" }'>
           
            <div class="awards-container col-xl-9 col-lg-8 col-md-12">
                    <div class="awards-track">
                        @foreach (range(1, 6) as $i)
                            <div class="award-card flex-shrink-0 mx-3" style="width: 300px;">
                                <div class="card p-4 h-100">
                                    <div class="text-center mb-3">
                                        <i class="bi bi-trophy text-warning"></i>
                                    </div>
                                    <h5 class="card-title fw-bold text-center">{{ ['Cannes Film Festival', 'Sundance', 'Toronto International', 'Berlin International', 'Venice Film Festival', 'Tribeca Film Festival'][$i-1] }}</h5>
                                    <p class="card-text text-center text-muted">Awarded for excellence in documentary storytelling – {{ 2020 + $i }}.</p>
                                </div>
                            </div>
                        @endforeach
                        
                        <!-- Duplicate items for seamless scrolling -->
                        @foreach (range(1, 6) as $i)
                            <div class="award-card flex-shrink-0 mx-3" style="width: 300px;">
                                <div class="card p-4 h-100">
                                    <div class="text-center mb-3">
                                        <i class="bi bi-trophy text-warning"></i>
                                    </div>
                                    <h5 class="card-title fw-bold text-center">{{ ['Cannes Film Festival', 'Sundance', 'Toronto International', 'Berlin International', 'Venice Film Festival', 'Tribeca Film Festival'][$i-1] }}</h5>
                                    <p class="card-text text-center text-muted">Awarded for excellence in documentary storytelling – {{ 2020 + $i }}.</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    
</section>
<!-- end section -->
<!-- start section -->
<section class="pb-0">
    <div class="container">
        <div class="row align-items-center justify-content-center">                    
            <div class="col-xl-12 col-lg-12 md-mb-50px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">PROJECTS</span>
                <h4 class="alt-font text-dark-gray fw-600 ls-minus-1px text-center" >LATEST PROJECTS</h4>
                
               
            </div>
            <div class="col-xl-12 col-lg-12 position-relative">
                <div class="row">
                    @foreach (range(1, 3) as $i)
                        <div class="col-md-4">
                            <div class="">
                                <div class="position-relative overflow-hidden">
                                    <a href="">
                                    <img src="{{ asset('images/sample2.jpg') }}" class="card-img-top" alt="Project {{ $i }}">
                                    </a>
                                </div>
                               
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="overflow-hidden">
    <div class="container">
        <div class="row justify-content-center">
            <h4 class="alt-font text-dark-gray fw-600 ls-minus-1px text-center">UPCOMING PROJECTS</h4>
            <div class="col-12">
                <div class="border-radius-6px h-500px md-h-450px sm-h-350px d-flex align-items-end justify-content-center overflow-hidden cover-background skrollr-zoom pb-9 xs-pb-12" style="background-image: url('https://via.placeholder.com/1920x1100')" data-bottom-top="transform:scale(1.2, 1.2) translateY(30px);" data-top-bottom="transform:scale(1, 1) translateY(-30px);">
                    <div class="opacity-medium bg-gradient-dark-transparent"></div>
                    <div class="row justify-content-center">
                        <div class="col-11 col-md-7 position-relative z-index-1 text-center text-lg-start md-mb-35px sm-mb-25px">
                            <h4 class="alt-font text-white mb-0 fw-300 fancy-text-style-4">We make the creative solutions for
                                <span class="fw-600" data-fancy-text='{ "effect": "rotate", "string": ["business!", "problems!", "brands!"] }'></span>
                            </h4> 
                        </div>
                        <div class="col-xl-5 col-lg-3 position-relative z-index-1 text-center animation-zoom">
                            <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU" class="position-relative d-inline-block text-center border border-color-transparent-white-very-light rounded-circle video-icon-box video-icon-large popup-youtube">
                                <span>
                                    <span class="video-icon">
                                        <i class="bi bi-play-fill text-white"></i>
                                    </span>
                                </span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-gradient-solitude-blue-transparent pt-0">
    <div class="container">
        <div class="row justify-content-center align-items-center" data-anime='{ "el": "childs", "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col-4 col-lg-2 col-sm-3 xs-mb-25px">
                <div class="swiper rounded-circle" data-slider-options='{ "slidesPerView": 1, "loop": true, "autoplay": { "delay": 1000, "disableOnInteraction": false },  "keyboard": { "enabled": true, "onlyInViewport": true }, "effect": "fade" }'>
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/200x200" alt=""/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/200x200" alt=""/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/200x200" alt=""/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/200x200" alt=""/>
                        </div>
                        <div class="swiper-slide">
                            <img src="https://via.placeholder.com/200x200" alt=""/>
                        </div> 
                    </div>
                </div>
            </div>
            <div class="col-lg-5 col-xl-4 col-md-6 col-sm-7 text-center text-sm-start">
                <h5 class="alt-font text-dark-gray lh-40 fw-500 ls-minus-1px mb-0 ms-10px lg-ms-0" data-anime='{ "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 500, "staggervalue": 300, "easing": "easeOutQuad" }'>Trusted by <span class="fw-700 text-base-color">25,000+</span> happy customers are using crafto.</h5>
            </div>
            <div class="col-xl-2 offset-xl-2 col-lg-3 col-sm-4 md-mt-35px text-center text-lg-start">
                <h2 class="alt-font text-dark-gray fw-700 ls-minus-3px mb-5px" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 300, "staggervalue": 100, "easing": "easeOutQuad" }'>200+</h2>
                <span class="text-dark-gray fw-500 lh-24 d-inline-block w-90 lg-w-80 sm-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 400, "staggervalue": 100, "easing": "easeOutQuad" }'>Creative team to care for projects.</span>
            </div>
            <div class="col-lg-2 col-sm-4 ps-40px md-ps-15px md-mt-35px text-center text-lg-start">
                <h2 class="alt-font text-dark-gray fw-700 ls-minus-3px mb-5px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "delay": 100, "staggervalue": 100, "easing": "easeOutQuad" }'>4.9</h2>
                <div class="review-star-icon fs-17 lh-20 d-block" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i>
                </div>
                <span class="text-dark-gray fw-500" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "delay": 300, "staggervalue": 100, "easing": "easeOutQuad" }'>2,488 Rating</span>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mt-4 sm-mt-40px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start testimonials item -->
            <div class="col testimonials-style-01 md-mb-30px">
                <div class="position-relative bg-white testimonial-arrow ps-50px pe-50px pt-30px pb-30px lg-p-30px border-radius-10px box-shadow-quadruple-large">
                    <span>Lorem ipsum dolor amet ipsum adipiscing elit eiusmod tempor lorem ipsum incididunt.</span>
                </div>
                <div class="mt-10px pt-20px pb-20px ps-15px pe-15px">
                    <img src="{{ asset('images/user_avatar.png') }}" class="w-80px h-80px rounded-circle me-15px" alt="" />
                    <div class="d-inline-block align-middle lh-20">
                        <div class="fw-500 text-dark-gray alt-font mb-5px">Herman miller</div>
                        <span class="fs-15">Chief financial</span>
                    </div>
                </div>
            </div>
            <!-- end testimonials item -->                            
            <!-- start testimonials item -->
            <div class="col testimonials-style-01 md-mb-30px">
                <div class="position-relative bg-white testimonial-arrow ps-50px pe-50px pt-30px pb-30px lg-p-30px border-radius-10px box-shadow-quadruple-large">
                    <span>Lorem ipsum dolor amet ipsum adipiscing elit eiusmod tempor lorem ipsum incididunt.</span>
                </div>
                <div class="mt-10px pt-20px pb-20px ps-15px pe-15px">
                    <img src="{{ asset('images/user_avatar.png') }}" class="w-80px h-80px rounded-circle me-15px" alt="" />
                    <div class="d-inline-block align-middle lh-20">
                        <div class="fw-500 text-dark-gray alt-font mb-5px">Shoko mugikura</div>
                        <span class="fs-15">Financial manager</span>
                    </div>
                </div>
            </div>
            <!-- end testimonials item -->
            <!-- start testimonials item -->
            <div class="col testimonials-style-01">
                <div class="position-relative bg-white testimonial-arrow ps-50px pe-50px pt-30px pb-30px lg-p-30px border-radius-10px box-shadow-quadruple-large">
                    <span>Lorem ipsum dolor amet ipsum adipiscing elit eiusmod tempor lorem ipsum incididunt.</span>
                </div>
                <div class="mt-10px pt-20px pb-20px ps-15px pe-15px">
                    <img src="{{ asset('images/user_avatar.png') }}" class="w-80px h-80px rounded-circle me-15px" alt="" />
                    <div class="d-inline-block align-middle lh-20">
                        <div class="fw-500 text-dark-gray alt-font mb-5px">Matthew taylor</div>
                        <span class="fs-15">Office manager</span>
                    </div>
                </div>
            </div>
            <!-- end testimonials item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="position-relative overflow-hidden sm-pb-20px"> 
    <div class="separator-line-9px bg-base-color position-absolute top-0px right-0px" data-bottom-top="width: 15%" data-center-top="width: 50%;"></div>
    <div class="container">
        <div class="row justify-content-center mb-2">
            <div class="col-xl-7 col-lg-9 col-md-10 text-center">
                <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Latest news</span>
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-1px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Stay updated with the latest trends and business news</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-12 px-md-0">
                <ul class="blog-classic blog-wrapper grid-loading grid grid-4col xl-grid-4col lg-grid-3col md-grid-2col sm-grid-2col xs-grid-1col gutter-extra-large" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <li class="grid-sizer"></li>
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                <a href="demo-business-blog-single-modern.html"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                <span class="fs-14 text-uppercase mb-5px d-block"><a href="demo-business-blog.html" class="text-dark-gray fw-600 categories-text">Business</a><a href="#" class="blog-date">26 August 2023</a></span>
                                <a href="demo-business-blog-single-modern.html" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">The best way to predict the secure future is to create it</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                <a href="demo-business-blog-single-modern.html"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                <span class="fs-14 text-uppercase mb-5px d-block"><a href="demo-business-blog.html" class="text-dark-gray fw-600 categories-text">marketing</a><a href="#" class="blog-date">24 August 2023</a></span>
                                <a href="demo-business-blog-single-modern.html" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">Recognizing the need is the primary condition for design</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                <a href="demo-business-blog-single-modern.html"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                <span class="fs-14 text-uppercase mb-5px d-block"><a href="demo-business-blog.html" class="text-dark-gray fw-600 categories-text">Design</a><a href="#" class="blog-date">22 August 2023</a></span>
                                <a href="demo-business-blog-single-modern.html" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">Make business easy with beautiful application store</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item -->
                    <!-- start blog item -->
                    <li class="grid-item">
                        <div class="card bg-transparent border-0 h-100">
                            <div class="blog-image position-relative overflow-hidden border-radius-6px">
                                <a href="demo-business-blog-single-modern.html"><img src="https://via.placeholder.com/600x430" alt="" /></a>
                            </div>
                            <div class="card-body px-0 pb-30px pt-30px xs-pb-15px">
                                <span class="fs-14 text-uppercase mb-5px d-block"><a href="demo-business-blog.html" class="text-dark-gray fw-600 categories-text">Business</a><a href="#" class="blog-date">20 August 2023</a></span>
                                <a href="demo-business-blog-single-modern.html" class="card-title mb-0 fw-500 fs-18 lh-30 text-dark-gray d-inline-block">Computers are to design as microwaves are to cooking</a>
                            </div>
                        </div>
                    </li>
                    <!-- end blog item --> 
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="bg-dark-slate-blue pt-4 pb-4 lg-pt-6 lg-pb-6" data-parallax-background-ratio="0.5" style="background-image: url('https://via.placeholder.com/1920x1100')" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
    <div class="opacity-medium bg-dark-slate-blue"></div>
    <div class="container z-index-1 position-relative"> 
        <div class="row align-items-center justify-content-center">
            <div class="col-12 text-center">
                <h4 class="alt-font text-white mb-0 fw-300 fancy-text-style-4">We make the creative solutions for
                    <span class="fw-600" data-fancy-text='{ "effect": "wave", "direction": "down", "string": ["business!", "problems!", "brands!"], "duration": 3500 }'></span>
                </h4> 
            </div>
        </div>
    </div>
</section>
<!-- end section -->
<!-- start subscription popup -->


@endsection

@section('scripts')
<!-- JS for Navigation and Scroll Effects -->
<script>
    // Navbar scroll transition (if you want to add this back)
 

    // Scroll buttons for films carousel
    const filmsContainer = document.getElementById('filmsCarousel');
    
    document.getElementById('filmsScrollLeft').addEventListener('click', () => {
        filmsContainer.scrollBy({ left: -320, behavior: 'smooth' });
    });

    document.getElementById('filmsScrollRight').addEventListener('click', () => {
        filmsContainer.scrollBy({ left: 320, behavior: 'smooth' });
    });
    

  
</script>
@endsection