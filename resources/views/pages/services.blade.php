@extends('layouts.app')

@section('content')

<!-- HERO SECTION -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url('images/services.png')">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
         <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
         <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Services</h1>
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


<!-- PROGRESS SECTION -->
<section class="big-section" id="down-section">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 md-mb-14 sm-mb-16 xs-mb-22 position-relative">
        <!-- Primary image: Photographer in studio -->
        <div class="text-end w-70 xs-w-85 ms-auto" data-animation-delay="500" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
          <img src="{{ asset('images/camera-man.png') }}" alt="Photographer at work in studio" class="border-radius-5px" />
        </div>
        <!-- Secondary overlapping image: Photography gear -->
        <div class="w-50 xs-w-75 overflow-hidden position-absolute left-5px bottom-minus-50px" data-shadow-animation="true" data-animation-delay="300" data-bottom-top="transform: translateY(-50px)" data-top-bottom="transform: translateY(50px)">
          <img src="{{ asset('images/camera.png') }}" alt="Photography gear close-up" class="border-radius-5px box-shadow-quadruple-large" />
        </div>
      </div>

      <div class="col-lg-5 offset-lg-1 text-center text-lg-start">
        <span class="bg-solitude-blue text-uppercase fs-13 ps-25px pe-25px alt-font fw-600 text-base-color lh-40 sm-lh-55 border-radius-100px d-inline-block mb-25px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
          15 Years of Professional Photography
        </span>

        <h3 class="alt-font fw-600 text-dark-gray ls-minus-2px" data-anime='{ "translateY": [30, 0], "opacity": [0,1], "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
          Capturing your moments with artistry and precision.
        </h3>

        <div class="progress-bar-style-01 mt-18 md-mt-12 sm-mt-70px" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
          <!-- Progress bar item -->
          <div class="progress mb-15 md-mb-70px bg-extra-medium-gray">
            <div class="progress-bar-title d-inline-block text-dark-gray fs-18 fw-500">Portrait Photography</div>
            <div class="progress-bar bg-base-color" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" aria-label="portrait">
              <span class="progress-bar-percent text-center bg-dark-gray fs-12 lh-14 fw-600 text-white">90%</span>
            </div>
          </div>

          <!-- Progress bar item -->
          <div class="progress mb-15 md-mb-70px bg-extra-medium-gray">
            <div class="progress-bar-title d-inline-block text-dark-gray fs-18 fw-500">Event Coverage</div>
            <div class="progress-bar bg-base-color" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" aria-label="events">
              <span class="progress-bar-percent text-center bg-dark-gray fs-12 lh-14 fw-600 text-white">85%</span>
            </div>
          </div>

          <!-- Progress bar item -->
          <div class="progress bg-extra-medium-gray">
            <div class="progress-bar-title d-inline-block text-dark-gray fs-18 fw-500">Editing & Retouching</div>
            <div class="progress-bar bg-base-color" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100" aria-label="editing">
              <span class="progress-bar-percent text-center bg-dark-gray fs-12 lh-14 fw-600 text-white">95%</span>
            </div>
          </div>
           <!-- end progress bar item -->
        </div>
      </div> 
    </div> 
  </div>
</section>

<section class="bg-solitude-blue"> 
<div class="container">
    <div class="row align-items-center justify-content-center text-center text-lg-start mb-6">
        <div class="col-xl-6 col-lg-7 col-md-9 md-mb-30px sm-mb-20px">
            <h3 class="alt-font fw-600 text-dark-gray m-0 ls-minus-2px" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Professional and highly dedicated services.</h3>
        </div>
     <div class="col-xl-5 offset-xl-1 col-lg-5 col-md-9 last-paragraph-no-margin">
        <p class="w-90 lg-w-100" data-anime='{ "el": "lines", "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            VOLA Media Hub uses storytelling and media to amplify voices, promote <strong>nature conservation</strong>, and harness <strong>the power of telling African stories</strong> to inspire change.
        </p>
        </div>
    </div>

<div class="row g-4" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
      <!-- Service Card -->

  <div class="col-md-4 d-flex">
    <div class="bg-white box-shadow-quadruple-large services-box-style-01 hover-box mb-30px border-radius-5px overflow-hidden text-center w-100 d-flex flex-column">
      <i class="bi bi-camera-reels display-4 text-base-color mt-3 d-block mx-auto"></i>
      <div class="p-10 text-center flex-grow-1">
        <span class="d-inline-block fs-18 alt-font fw-500 text-dark-gray mb-5px">
          Storytelling for Conservation & Communities
        </span>
        <p class="card-text text-muted">
          Compelling multimedia stories that spotlight environmental challenges, community voices, and African heritage.
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4 d-flex">
    <div class="bg-white box-shadow-quadruple-large services-box-style-01 hover-box mb-30px border-radius-5px overflow-hidden text-center w-100 d-flex flex-column">
      <i class="bi bi-megaphone display-4 text-base-color mt-3 d-block mx-auto"></i>
      <div class="p-10 text-center flex-grow-1">
        <span class="d-inline-block fs-18 alt-font fw-500 text-dark-gray mb-5px">
          Media Campaigns & Advocacy
        </span>
        <p class="card-text text-muted">
          Design and execution of advocacy campaigns that raise awareness and inspire action on social and environmental issues.
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4 d-flex">
    <div class="bg-white box-shadow-quadruple-large services-box-style-01 hover-box mb-30px border-radius-5px overflow-hidden text-center w-100 d-flex flex-column">
      <i class="bi bi-people-fill display-4 text-base-color mt-3 d-block mx-auto"></i>
      <div class="p-10 text-center flex-grow-1">
        <span class="d-inline-block fs-18 alt-font fw-500 text-dark-gray mb-5px">
          Public Relations & Communication Strategy
        </span>
        <p class="card-text text-muted">
          Tailored communication plans and media engagement to boost visibility and influence.
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4 d-flex">
    <div class="bg-white box-shadow-quadruple-large services-box-style-01 hover-box mb-30px border-radius-5px overflow-hidden text-center w-100 d-flex flex-column">
      <i class="bi bi-camera-video-fill display-4 text-base-color mt-3 d-block mx-auto"></i>
      <div class="p-10 text-center flex-grow-1">
        <span class="d-inline-block fs-18 alt-font fw-500 text-dark-gray mb-5px">
          Creative Production
        </span>
        <p class="card-text text-muted">
          Professional video, photography, design, and audio services that elevate your storytelling and brand.
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4 d-flex">
    <div class="bg-white box-shadow-quadruple-large services-box-style-01 hover-box mb-30px border-radius-5px overflow-hidden text-center w-100 d-flex flex-column">
      <i class="bi bi-globe2 display-4 text-base-color mt-3 d-block mx-auto"></i>
      <div class="p-10 text-center flex-grow-1">
        <span class="d-inline-block fs-18 alt-font fw-500 text-dark-gray mb-5px">
          Digital & Social Media Management
        </span>
        <p class="card-text text-muted">
          Building and managing vibrant online presences that engage audiences across Africa and beyond.
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4 d-flex">
    <div class="bg-white box-shadow-quadruple-large services-box-style-01 hover-box mb-30px border-radius-5px overflow-hidden text-center w-100 d-flex flex-column">
      <i class="bi bi-journal-richtext display-4 text-base-color mt-3 d-block mx-auto"></i>
      <div class="p-10 text-center flex-grow-1">
        <span class="d-inline-block fs-18 alt-font fw-500 text-dark-gray mb-5px">
          Training & Capacity Building
        </span>
        <p class="card-text text-muted">
          Hands-on workshops empowering grassroots groups and youth with media and storytelling skills.
        </p>
      </div>
    </div>
  </div>

  <div class="col-md-4 d-flex">
    <div class="bg-white box-shadow-quadruple-large services-box-style-01 hover-box mb-30px border-radius-5px overflow-hidden text-center w-100 d-flex flex-column">
      <i class="bi bi-briefcase-fill display-4 text-base-color mt-3 d-block mx-auto"></i>
      <div class="p-10 text-center flex-grow-1">
        <span class="d-inline-block fs-18 alt-font fw-500 text-dark-gray mb-5px">
          Media Consultancy for Development Projects
        </span>
        <p class="card-text text-muted">
          Transparent, impactful storytelling to document and communicate development project outcomes effectively.
        </p>
      </div>
    </div>
  </div>



      <!-- Service Card -->

  </div>
</div>
</section>


<!-- CTA SECTION -->
<section class="half-section">
    <div class="container"> 
        <div class="row align-items-center text-center text-md-start">
            <div class="col sm-mb-20px" data-anime='{ "translateX": [-30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h4 class="alt-font text-dark-gray fw-600 ls-minus-2px m-0">Get a free personal business consultation?</h4>
            </div>
            <div class="col-12 col-md-auto" data-anime='{ "translateX": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <a href="{{ route('contact') }}" class="btn btn-large btn-dark-gray btn-box-shadow btn-rounded left-icon"><i class="feather icon-feather-mail"></i>Free consultation</a>
            </div>
        </div>
    </div>
</section>
<!-- CTA SECTION -->

@endsection
