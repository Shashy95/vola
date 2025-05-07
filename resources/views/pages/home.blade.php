@extends('layouts.app')

@section('content')
<section class="section-dark p-0 bg-dark-gray">
    <div class="swiper lg-no-parallax magic-cursor full-screen md-h-600px sm-h-500px ipad-top-space-margin swiper-light-pagination">
        <div class="swiper-wrapper">
            <!-- start slider item -->
            <div class="swiper-slide overflow-hidden">
                <div class="cover-background position-absolute top-0 start-0 w-100 h-100" data-swiper-parallax="500" style="background-image:url('images/demo-business-slider-01.jpg');">
                    <div class="opacity-light bg-gradient-sherpa-blue-black"></div>
                    <div class="container h-100" data-swiper-parallax="-500">
                        <div class="row h-100">
                            <div class="col-12 p-0">
                            <video autoplay muted loop playsinline class="position-absolute top-0 start-0 w-100 h-100" style="object-fit: cover; display: block;">
<<<<<<< Updated upstream
                              @if(isset($video) && $video)
                              <source src="{{ asset($video->video_path) }}" type="video/mp4">
                          @else
                              <!-- Display a message or hide the video element entirely -->
                              <!-- Or you could use a placeholder image instead -->
                          @endif
=======
                                  {{-- <source src="{{ asset($video->video_path) }}" type="video/mp4"> --}}
                                Your browser does not support the video tag.
>>>>>>> Stashed changes
                            </video>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end slider item -->

            <!-- Pagination (optional) -->
            <div class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets"></div>
        </div>
    </div>
</section>
  

<!-- end section -->
<!-- start section -->
<section class="border-bottom main-section pt-40px pb-40px overflow-hidden">
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

  
<!-- end section -->
<!-- start section -->
<section class="pb-8 md:pb-17 xs:pb-28 bg-light position-relative">
 
  <div class="container">
    <!-- Section Heading -->
    <div class="row justify-content-center mb-5">
        <div class="col-xl-8 text-center">
            <h4 class="alt-font fw-600 mb-2" style="color: #10322c;">Explore Our Conservation Films</h4>
            <p class="text-muted mb-0">Powerful stories captured from the wild. Scroll through our collection of immersive documentaries and visual campaigns.</p>
        </div>
    </div>


  <div class="row grid-margin">
    <div class="col-lg-12">
      <div class="">
        <div class="">
          <div class="owl-carousel owl-theme full-width">
            @foreach ($films as $film)
            <div class="item" style="width: 350px;">
              <a href="{{ asset($film->video_path) }}">
                <img 
                    src="{{ asset($film->thumbnail) ?: asset('images/default-thumbnail.jpg') }}" 
                    alt="Film Thumbnail" 
                    class="carousel-img"
                />
            </a>
            </div>
            @endforeach
           
           
          </div>
        </div>
      </div>
    </div>
  </div>
  
</div>


  </section>
  

  <section class="py-5 bg-light">
    <div class="container">
      <!-- Section Title -->
      <div class="row justify-content-center mb-4">
        <div class="col-lg-8 text-center">
          <h4 class="alt-font fw-600 mb-2" style="color: #10322c;">Visual Showcase</h4>
          <p class="text-muted">A rich gallery of our conservation scenes and environmental stories.</p>
        </div>
      </div>
  
      <!-- Full Image Grid -->
      <div class="row g-3">
        <!-- Loop through images -->
        @foreach ($gallery as $image )
        <div class="col-6 col-md-4 col-lg-3">
          <img src="{{ asset($image->image_path) }}" class="img-fluid rounded-3 shadow-sm w-100 equal-image" alt="Image 1" style="height: 250px; object-fit: cover;">
        </div>
        @endforeach
        
      </div>
    </div>
  </section>
  
  
  
  

<!-- end section -->
<!-- start section -->


<section class="py-5 bg-white border-top">
    <div class="container">
      <!-- Section Header -->
      <div class="row justify-content-center mb-4">
        <div class="col-lg-8 text-center">
          <h4 class="alt-font fw-600 mb-2" style="color: #10322c;">Our Clients</h4>
          <p class="text-muted">We proudly collaborate with organizations worldwide.</p>
        </div>
      </div>

      <div class="row grid-margin">
        <div class="col-lg-12">
          <div class="">
            <div class="">
              <div class="owl-carousel owl-theme full-width2">
                @foreach ($clients as $client)
                <div class="item" style="width: 100%; height: 120px;">
                    <img 
                        src="{{ asset($client->logo) ?: asset('images/default-thumbnail.jpg') }}" 
                        alt="Client Logo" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;" />
               
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
{{-- <section class="bg-dark-slate-blue pt-4 pb-4 lg-pt-6 lg-pb-6" data-parallax-background-ratio="0.5" style="background-image: url('https://via.placeholder.com/1920x1100')" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
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
</section> --}}
<!-- end section -->
<!-- start subscription popup -->


@endsection

@section('scripts')

@endsection