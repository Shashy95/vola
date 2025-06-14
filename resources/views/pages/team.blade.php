@extends('layouts.app')

@section('styles')
<style>
    .text-highlight {
        position: relative;
        display: inline-block;
    }
    
    .separator-animation {
        transition: all 0.5s ease;
        transform-origin: left;
    }
    
    .text-highlight:hover .separator-animation {
        transform: scaleX(1.1);
    }
    
    /* Team member circular images - consistent sizing */
    .team-image-container {
        width: 180px;
        height: 180px;
        overflow: hidden;
        border-radius: 50%;
        margin: 0 auto;
    }
    
    .team-member-image {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }
    
    /* Modal image container with fixed dimensions */
    .team-modal-image-container {
        height: 400px;
        width: 100%;
        overflow: hidden;
        background-color: #f8f9fa;
    }
    
    /* Ensure scrollable bio content */
    .team-bio-content {
        max-height: 350px;
        overflow-y: auto;
        padding-right: 15px;
        -webkit-overflow-scrolling: touch;
        font-size: 16px;
    }
    
    .team-bio-content::-webkit-scrollbar {
        width: 5px;
    }
    
    .team-bio-content::-webkit-scrollbar-track {
        background: #f1f1f1;
    }
    
    .team-bio-content::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 10px;
    }
    
    .team-bio-content::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
    
    .team-member-card {
        transition: transform 0.3s ease;
    }
    
    .team-member-card:hover {
        transform: translateY(-5px);
    }
    
    .animate-bounce {
        animation: bounce 2s infinite;
    }
    
    @keyframes bounce {
        0%, 20%, 50%, 80%, 100% {transform: translateY(0);}
        40% {transform: translateY(-20px);}
        60% {transform: translateY(-10px);}
    }
    
    /* Make modal more compact */
    .modal-dialog {
        max-width: 800px;
    }
    
    /* Small circular image in mobile modal view */
    .team-image-container-small {
        width: 80px;
        height: 80px;
        overflow: hidden;
        border-radius: 50%;
    }
    
    .object-fit-cover {
        object-fit: cover;
    }
    .border-end{
        border-right-color: #cf8d28;!important
    }
  
   
 
</style>
@endsection

@section('content')

<!-- Hero Section -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url('images/team.png'); min-height: 80vh;">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container h-100">
        <div class="row align-items-center justify-content-center h-100 extra-small-screen">
            <div class="col-12 position-relative text-center">
                <h1 class="display-3 text-white text-shadow-double-large fw-500 ls-minus-3px mb-4" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Our Team</h1>
                <p class="lead text-white opacity-75 w-75 mx-auto" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 200, "easing": "easeOutQuad" }'>The talented individuals who make it all happen</p>
            </div> 
            <div class="down-section text-center position-absolute bottom-0 w-100 pb-5" data-anime='{ "translateY": [-15, 0], "opacity": [0,1], "duration": 600, "delay": 400, "easing": "easeOutQuad" }'>
                <a href="#team-section" aria-label="scroll down" class="section-link">
                    <div class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white animate-bounce">
                        <i class="feather icon-feather-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Team Philosophy Section -->
<section id="team-section" class="py-10 bg-very-light-gray">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 mb-5 mb-lg-0" data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h2 class="display-5 fw-600 text-dark-gray mb-4">
                    Teamwork wins <span class="text-highlight position-relative">championships
                    <span class="bg-base-color h-10px w-100 bottom-0 opacity-5 position-absolute left-0 separator-animation"></span></span>
                </h2>
                <p class="fs-6 text-muted mb-4">
                    Our team is the backbone of our organization. Each member brings unique skills and perspectives that combine to create something extraordinary.
                </p>
                <div class="d-flex align-items-center">
                    <div class="pe-4 border-end border-2">
                        <div class="fs-1 fw-bold text-base-color">100+</div>
                        <div class="text-muted">Projects</div>
                    </div>
                    <div class="ps-4">
                        <div class="fs-1 fw-bold text-base-color">50+</div>
                        <div class="text-muted">Team Members</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 offset-lg-1">
                <div class="position-relative">
                    <div class="overflow-hidden" data-animation-delay="500" data-shadow-animation="true">
                        <img src="{{ asset('images/teamwork.jpg') }}" alt="Team working together" class="img-fluid w-100 rounded">
                    </div>
                    <div class="position-absolute bottom-0 start-0 bg-base-color text-white p-4 m-4 shadow" style="transform: translate(-20%, 20%);">
                        <div class="fs-1 fw-bold">15+</div>
                        <div>Years Experience</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Team Members Section -->
<section class="py-10 bg-white">
    <div class="container">
        <div class="text-center mb-8">
            <h2 class="display-5 fw-600 text-dark-gray mb-3">Meet Our Team</h2>
            <p class="lead text-muted w-75 mx-auto">The talented professionals who make our success possible</p>
        </div>
        
        <div class="row g-4" data-anime='{ "el": "childs", "translateY": [0, 0], "perspective": [800,800], "scale": [1.1, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 300, "easing": "easeOutQuad" }'>
            @foreach ($teams as $index => $team)
            <div class="col-md-6 col-lg-4 col-xl-3">
                <div class="team-member-card text-center p-3 h-100" data-bs-toggle="modal" data-bs-target="#teamModal{{ $index }}" style="cursor: pointer;">
                    <div class="team-image-container mb-3 mx-auto">
                        <img 
                            src="{{ $team->photo ? asset($team->photo) : asset('images/user_avatar.png') }}" 
                            alt="{{ $team->name }}" 
                            class="team-member-image"
                        />
                    </div>
                    <h6 class="fw-600 mb-1 text-base-color">{{ $team->name }}</h6>
                    <p class="text-muted">{{ $team->position }}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Team Member Modals -->
@foreach ($teams as $index => $team)
<div class="modal fade" id="teamModal{{ $index }}" tabindex="-1" aria-labelledby="teamModalLabel{{ $index }}" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content overflow-hidden border-0">
            <div class="row g-0">
                <!-- Left: Image -->
                <div class="col-lg-4 d-none d-lg-block">
                    <div class="team-modal-image-container d-flex align-items-center justify-content-center">
                        <img 
                            src="{{ $team->photo ? asset($team->photo) : asset('images/user_avatar.png') }}" 
                            alt="{{ $team->name }}" 
                            class="img-fluid w-100 h-100 object-fit-cover"
                        />
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="col-lg-8 col-12">
                    <div class="p-4 position-relative h-100">
                        <button type="button" class="btn-close position-absolute end-0 top-0 m-3" data-bs-dismiss="modal" aria-label="Close"></button>
                        
                        <div class="d-flex align-items-center mb-4">
                            <div class="team-image-container-small me-3 d-lg-none">
                                <img 
                                    src="{{ $team->photo ? asset($team->photo) : asset('images/user_avatar.png') }}" 
                                    alt="{{ $team->name }}" 
                                    class="team-member-image"
                                />
                            </div>
                            <div class="flex-grow-1">
                                <h5 class="fw-600 mb-1 text-base-color">{{ $team->name }}</h5>
                                <p class="text-muted mb-0">{{ $team->position }}</p>
                            </div>
                        </div>
                        
                        <div class="team-bio-content">
                            {!! $team->bio !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endforeach

@endsection

