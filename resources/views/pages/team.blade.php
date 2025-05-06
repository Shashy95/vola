@extends('layouts.app')

@section('content')

<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url('images/team.jpg')">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Team</h1>
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
<section class="bg-very-light-gray pb-8 md-pb-17 xs-pb-28">
    
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-9 md-mb-50px text-center text-lg-start" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
               
                <h1 class="alt-font fw-600 text-dark-gray ls-minus-2px shadow-none" data-shadow-animation="true" data-animation-delay="900">
                    Teamwork wins <span class="text-highlight">championships.
                    <span class="bg-base-color h-10px sm-h-8px bottom-20px md-bottom-17px opacity-5 separator-animation"></span></span>
                </h1>
                <p class="w-90 xs-w-100 mx-auto mx-lg-0">
                    Lorem ipsum dolor amet consectetur adipiscing elit eiusmod tempor incididunt labore et dolore magna ut enim ad consectetur minim veniam.
                </p>
                <div class="d-flex flex-row justify-content-center justify-content-lg-start align-items-center mt-35px">
                    <div class="w-120px me-25px flex-shrink-0">
                        <div class="chart-percent">
                            
                        </div>
                    </div>
                    <div class="text-start">
                        
                    </div>
                </div>
            </div>
            <div class="col-xl-6 col-lg-6 offset-xl-1 position-relative">
                <div class="text-end w-80 md-w-75 ms-auto" data-animation-delay="500" data-shadow-animation="true" data-bottom-top="transform: translateY(50px)" data-top-bottom="transform: translateY(-50px)">
                    <img src="{{ asset('images/teamwork.jpg') }}" alt="" class="border-radius-5px">
                </div>
               
            </div>
        </div>
    </div>
</section>

<!-- end section -->   
<!-- start section -->
<section>
    <div class="container">
        <div class="row justify-content-center mb-3 md-mb-8">
            <div class="col-lg-7 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 200, "easing": "easeOutQuad" }'>
                <h1 class="alt-font text-dark-gray fw-600 ls-minus-1px">Meet the team</h1>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 justify-content-center" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [800,800], "scale": [1.1, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            @foreach ($teams as $team)
                <div class="col text-center team-style-05 mb-40px sm-mb-35px">
                    <div class="position-relative mb-25px last-paragraph-no-margin" style="width: 250px; height: 250px; margin: 0 auto;">
                        <img 
                            src="{{ $team->photo ? asset($team->photo) : asset('images/user_avatar.png') }}" 
                            alt="{{ $team->name }}" 
                            class="img-fluid" 
                            style="width: 100%; height: 100%; object-fit: cover; border-radius: 10px;"
                        />
                    </div>
                    <div class="alt-font fw-500 text-dark-gray lh-28 fs-20">{{ $team->name }}</div>
                    <span>{{ $team->position }}</span>
                </div>
            @endforeach
        </div>
        
    </div>
</section>

@endsection