@extends('layouts.app')

@section('content')
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url(https://via.placeholder.com/1920x1100)">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>About - business</h1>
            </div> 
            <div class="down-section text-center" data-anime='{ "translateY": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <a href="#down-section" aria-label="scroll down" class="section-link">
                    <div class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white">
                        <i class="feather icon-feather-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>
<!-- end page title -->
<!-- start section -->
<section id="down-section">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-5 col-md-10 position-relative z-index-1 md-mb-40px">
                <div class="atropos" data-atropos>
                    <div class="atropos-scale" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <div data-atropos-offset="3">
                                    <img src="https://via.placeholder.com/800x925" class="border-radius-6px w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute-middle-right md-absolute-middle-center right-minus-45px md-right-auto d-inline-block text-center z-index-9">
                    <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU" class="bg-white box-shadow-extra-large rounded-circle video-icon-box video-icon-extra-large popup-youtube d-inline-block" data-anime='{ "translate": [0, 0], "scale": [0,1], "duration": 1000, "delay": 300, "staggervalue": 300, "easing": "easeOutBack" }'>
                        <span>
                            <span class="video-icon bg-white">
                                <i class="fa-solid fa-play text-base-color"></i>
                                <span class="video-icon-sonar">
                                    <span class="video-icon-sonar-bfr bg-base-color opacity-9"></span>
                                </span>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <div class="col-xl-5 col-lg-6 offset-lg-1 col-md-9 ps-6 text-center text-lg-start lg-ps-15px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">About company</span>
                <h3 class="fw-600 text-dark-gray ls-minus-2px alt-font sm-w-80 xs-w-100 mx-auto sm-mb-20px">Provide advanced business solutions.</h3>
                <p>Lorem ipsum dolor amet consectetur adipiscing elit do eiusmod tempor ut incididunt labore et dolore magna ut enim minim veniam adipiscing.</p> 
                <p>Lorem ipsum dolor consectetur et adipiscing elit eiusmod tempor incididunt adipiscing.</p>
                <a href="demo-business-services.html" class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded mt-15px sm-mt-10px">Our services<i class="fa-solid fa-arrow-right"></i></a>
            </div> 
        </div> 
        <div class="row align-items-center justify-content-center mt-7 ps-5 sm-mt-35px lg-ps-0 pe-5 lg-pe-0">
            <div class="col-md-6 col-sm-8 md-mb-35px">
                <div class="row align-items-center justify-content-center" data-anime='{ "translateY":[0, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="col-auto"><span class="alt-font text-dark-gray fw-600 fs-130 lg-fs-110 ls-minus-7px">30</span></div>
                    <div class="col-5 col-xl-4 col-lg-5 col-sm-6"><h6 class="fw-500 text-dark-gray alt-font m-0 ls-minus-1px">Years experience working.</h6></div>
                    <div class="col-3 col-xl-3 col-md-2 text-center d-none d-lg-inline-block"><span class="fw-400 fs-110 text-base-color position-relative top-minus-10px">|</span></div>
                </div>
            </div>
            <div class="col-lg-6 col-md-10 overflow-hidden">
                <div class="row align-items-center" data-anime='{ "el": "childs", "translateY":[0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="col-sm-6 last-paragraph-no-margin text-center xs-mb-35px">
                        <h2 class="fw-700 text-dark-gray mb-5px alt-font">5M+</h2>
                        <span class="fs-18 alt-font ls-minus-05px fw-500 text-dark-gray">Project completed</span>
                        <p class="lh-24">Lorem simply text</p>
                    </div>
                    <div class="col-sm-6 last-paragraph-no-margin text-center">
                        <h2 class="fw-700 text-dark-gray mb-5px alt-font">64K</h2>
                        <span class="fs-18 alt-font ls-minus-05px fw-500 text-dark-gray">Satisfied customer</span>
                        <p class="lh-24">Lorem simply text</p>
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
        <div class="row justify-content-center mb-3">
            <div class="col-xl-5 col-lg-6 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="bg-white text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">Process cycle</span>
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">Smart and effective business solutions</h3>
            </div>
        </div>
        <div class="row justify-content-center" data-anime='{ "el": "childs", "perspective": [1200,1200], "translateY": [30, 0], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start fancy text box item -->
            <div class="col-lg-6 col-md-8 fancy-text-box-style-02 mb-30px">
                <div class="feature-box feature-box-left-icon-middle h-100 bg-white hover-box dark-hover border-radius-6px ps-4 pe-4 pt-9 pb-9 box-shadow-extra-large box-shadow-extra-large-hover overflow-hidden">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-15px lg-me-15px">
                        <h2 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-0">2010</h2>
                    </div>
                    <div class="feature-box-content border-start border-color-extra-medium-gray ps-40px pe-40px lg-ps-15px lg-pe-15px last-paragraph-no-margin">
                        <span class="text-dark-gray fw-500 fs-20 xs-fs-18 alt-font ls-minus-05px">Business founded</span>
                        <p class="text-light-opacity">Lorem ipsum dolor amet</p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>
            <!-- end fancy text box item -->
            <!-- start fancy text box item -->
            <div class="col-lg-6 col-md-8 fancy-text-box-style-02 mb-30px">
                <div class="feature-box feature-box-left-icon-middle h-100 bg-white hover-box dark-hover border-radius-6px ps-4 pe-4 pt-9 pb-9 box-shadow-extra-large box-shadow-extra-large-hover overflow-hidden">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-15px lg-me-15px">
                        <h2 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-0">2012</h2>
                    </div>
                    <div class="feature-box-content border-start border-color-extra-medium-gray ps-40px pe-40px lg-ps-15px lg-pe-15px last-paragraph-no-margin">
                        <span class="text-dark-gray fw-500 fs-20 xs-fs-18 alt-font ls-minus-05px">Build new office</span>
                        <p class="text-light-opacity">Lorem ipsum dolor amet</p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>
            <!-- end fancy text box item -->
            <!-- start fancy text box item -->
            <div class="col-lg-6 col-md-8 fancy-text-box-style-02 md-mb-30px">
                <div class="feature-box feature-box-left-icon-middle h-100 bg-white hover-box dark-hover border-radius-6px ps-4 pe-4 pt-9 pb-9 box-shadow-extra-large box-shadow-extra-large-hover overflow-hidden">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-15px lg-me-15px">
                        <h2 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-0">2014</h2>
                    </div>
                    <div class="feature-box-content border-start border-color-extra-medium-gray ps-40px pe-40px lg-ps-15px lg-pe-15px last-paragraph-no-margin">
                        <span class="text-dark-gray fw-500 fs-20 xs-fs-18 alt-font ls-minus-05px">Relocates headquarter</span>
                        <p class="text-light-opacity">Lorem ipsum dolor amet</p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>
            <!-- end fancy text box item -->
            <!-- start fancy text box item -->
            <div class="col-lg-6 col-md-8 fancy-text-box-style-02">
                <div class="feature-box feature-box-left-icon-middle h-100 bg-white hover-box dark-hover border-radius-6px ps-4 pe-4 pt-9 pb-9 box-shadow-extra-large box-shadow-extra-large-hover overflow-hidden">
                    <div class="feature-box-icon ms-40px me-40px lg-ms-15px lg-me-15px">
                        <h2 class="alt-font text-dark-gray fw-700 ls-minus-1px mb-0">2018</h2>
                    </div>
                    <div class="feature-box-content border-start border-color-extra-medium-gray ps-40px pe-40px lg-ps-15px lg-pe-15px last-paragraph-no-margin">
                        <span class="text-dark-gray fw-500 fs-20 alt-font ls-minus-05px">Revenue of millions</span>
                        <p class="text-light-opacity">Lorem ipsum dolor amet</p>
                    </div>
                    <div class="feature-box-overlay bg-base-color"></div>
                </div>
            </div>
            <!-- end fancy text box item -->
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section>
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-xl-5 col-lg-6 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px">Creative team</span>
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">Committed staff are ready to help you</h3>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-lg-4 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [50, 0], "translateX": [-30, 0], "opacity": [0,1], "duration": 700, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start team member item --> 
            <div class="col text-center team-style-05 md-mb-35px">
                <div class="position-relative mb-30px last-paragraph-no-margin">
                    <img src="https://via.placeholder.com/600x756" class="border-radius-4px" alt="" />
                    <div class="w-100 h-100 d-flex flex-column justify-content-end align-items-center border-radius-4px p-40px team-content bg-base-color-transparent">
                        <p class="text-white w-80 lg-w-75 sm-w-80 absolute-middle-center opacity-7">Lorem ipsum simply of printing typesetting.</p>
                        <div class="social-icon fs-19">
                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.twitter.com/" target="_blank" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                        </div>                                
                    </div>
                </div>
                <div class="alt-font fw-500 text-dark-gray lh-22 fs-18">Jeremy dupont</div>
                <span>Director</span>
            </div>
            <!-- end team member item -->   
            <!-- start team member item --> 
            <div class="col text-center team-style-05 md-mb-35px">
                <div class="position-relative mb-30px last-paragraph-no-margin">
                    <img src="https://via.placeholder.com/600x756" class="border-radius-4px" alt="" />
                    <div class="w-100 h-100 d-flex flex-column justify-content-end align-items-center border-radius-4px p-40px team-content bg-base-color-transparent">
                        <p class="text-white w-80 lg-w-75 sm-w-80 absolute-middle-center opacity-7">Lorem ipsum simply of printing typesetting.</p>
                        <div class="social-icon fs-19">
                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.twitter.com/" target="_blank" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                        </div>                               
                    </div>
                </div>
                <div class="alt-font fw-500 text-dark-gray lh-22 fs-18">Jessica dover</div>
                <span>Founder</span>
            </div>
            <!-- end team member item -->   
            <!-- start team member item --> 
            <div class="col text-center team-style-05 xs-mb-35px">
                <div class="position-relative mb-30px last-paragraph-no-margin">
                    <img src="https://via.placeholder.com/600x756" class="border-radius-4px" alt="" />
                    <div class="w-100 h-100 d-flex flex-column justify-content-end align-items-center border-radius-4px p-40px team-content bg-base-color-transparent">
                        <p class="text-white w-80 lg-w-75 sm-w-80 absolute-middle-center opacity-7">Lorem ipsum simply of printing typesetting.</p>
                        <div class="social-icon fs-19">
                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.twitter.com/" target="_blank" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                        </div>                               
                    </div>
                </div>
                <div class="alt-font fw-500 text-dark-gray lh-22 fs-18">Matthew taylor</div>
                <span>Designer</span>
            </div>
            <!-- end team member item -->   
            <!-- start team member item --> 
            <div class="col text-center team-style-05">
                <div class="position-relative mb-30px last-paragraph-no-margin">
                    <img src="https://via.placeholder.com/600x756" class="border-radius-4px" alt="" />
                    <div class="w-100 h-100 d-flex flex-column justify-content-end align-items-center border-radius-4px p-40px team-content bg-base-color-transparent">
                        <p class="text-white w-80 lg-w-75 sm-w-80 absolute-middle-center opacity-7">Lorem ipsum simply of printing typesetting.</p>
                        <div class="social-icon fs-19">
                            <a href="https://www.facebook.com/" target="_blank" class="text-white"><i class="fa-brands fa-facebook-f"></i></a>
                            <a href="https://www.instagram.com/" target="_blank" class="text-white"><i class="fa-brands fa-instagram"></i></a>
                            <a href="https://www.twitter.com/" target="_blank" class="text-white"><i class="fa-brands fa-twitter"></i></a>
                        </div>                              
                    </div>
                </div>
                <div class="alt-font fw-500 text-dark-gray lh-22 fs-18">Johncy parker</div>
                <span>Writer</span>
            </div>
            <!-- end team member item -->   
        </div>
    </div>
</section>
<!-- end section -->
<!-- start section -->
<section class="pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-5 text-center mb-2 xs-mb-4" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="text-dark-gray fw-600 fs-16 text-uppercase border-1 pb-5px border-bottom border-color-extra-medium-gray text-dark-gray">Join the 10,000+ companies using crafto</span>
            </div>
        </div>
        <div class="row position-relative clients-style-08 mt-25px" data-anime='{ "opacity": [0,1], "duration": 600, "delay":200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <div class="col swiper text-center feather-shadow" data-slider-options='{ "slidesPerView": 2, "spaceBetween":0, "speed": 3000, "loop": true, "pagination": { "el": ".slider-four-slide-pagination-2", "clickable": false }, "allowTouchMove": false, "autoplay": { "delay":0, "disableOnInteraction": false}, "navigation": { "nextEl": ".slider-four-slide-next-2", "prevEl": ".slider-four-slide-prev-2" }, "keyboard": { "enabled": true, "onlyInViewport": true }, "breakpoints": { "1200": { "slidesPerView": 5 }, "992": { "slidesPerView": 3 }, "576": { "slidesPerView": 2 } }, "effect": "slide" }'>
                <div class="swiper-wrapper marquee-slide">
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-walmart-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-netflix-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-invision-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-yahoo-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-amazon-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-walmart-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-netflix-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-invision-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-yahoo-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                    <!-- start client item -->
                    <div class="swiper-slide">
                        <a href="#"><img src="images/logo-amazon-dark-blue.svg" alt="" /></a>
                    </div>
                    <!-- end client item -->
                </div> 
            </div>  
        </div>
    </div>
</section>

@endsection