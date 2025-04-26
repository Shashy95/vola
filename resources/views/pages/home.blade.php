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
                                  <source src="{{ asset($video->video_path) }}" type="video/mp4">
                                Your browser does not support the video tag.
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
    <style>
      .carousel-img {
        height: 500px;
        object-fit: cover;
        width: 100%;
        border-radius: 12px;
      }
  
      #filmsCarousel {
        scroll-snap-type: x mandatory;
      }
  
      #filmsCarousel > div {
        scroll-snap-align: start;
      }
  
      .carousel-btn {
        background-color: #ffffff;
        color: #10322c;
        border: 2px solid #10322c;
        border-radius: 50%;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
      }
  
      .carousel-btn:hover {
        background-color: #10322c;
        color: white;
      }
    </style>
  
    <div class="container">
      <!-- Section Heading -->
      <div class="row justify-content-center mb-5">
        <div class="col-xl-8 text-center">
            <h4 class="alt-font fw-600 mb-2" style="color: #10322c;">Explore Our Conservation Films</h4>
          <p class="text-muted mb-0">Powerful stories captured from the wild. Scroll through our collection of immersive documentaries and visual campaigns.</p>
        </div>
      </div>
  
      <!-- Carousel -->
      <div class="position-relative">
        <!-- Navigation Buttons -->
        <button class="carousel-btn position-absolute top-50 start-0 translate-middle-y z-2" id="filmsScrollLeft" aria-label="Scroll Left">
          <i class="bi bi-chevron-left"></i>
        </button>
        <button class="carousel-btn position-absolute top-50 end-0 translate-middle-y z-2" id="filmsScrollRight" aria-label="Scroll Right">
          <i class="bi bi-chevron-right"></i>
        </button>
  
        <!-- Scrollable Cards -->
        <div class="d-flex overflow-auto px-5" id="filmsCarousel" style="gap: 1.5rem; scroll-behavior: smooth;">
          <!-- Carousel Item -->
          <div class="flex-shrink-0" style="width: 350px;">
            <div class="card border-0 shadow-sm">
              <a href="#">
                <img 
                  src="https://ngoteyawild.co.tz/wp-content/uploads/2023/11/closure-covers-03-scaled.jpg" 
                  alt="Film 1" 
                  class="carousel-img"
                />
              </a>
            </div>
          </div>
  
          <div class="flex-shrink-0" style="width: 350px;">
            <div class="card border-0 shadow-sm">
              <a href="#">
                <img 
                  src="https://ngoteyawild.co.tz/wp-content/uploads/2023/11/MAHALE-COVERS-scaled.jpeg" 
                  alt="Film 2" 
                  class="carousel-img"
                />
              </a>
            </div>
          </div>
  
          <div class="flex-shrink-0" style="width: 350px;">
            <div class="card border-0 shadow-sm">
              <a href="#">
                <img 
                  src="https://ngoteyawild.co.tz/wp-content/uploads/2023/11/nyekweri-cover.2jpg-01-min-scaled.jpg" 
                  alt="Film 3" 
                  class="carousel-img"
                />
              </a>
            </div>
          </div>
  
          <div class="flex-shrink-0" style="width: 350px;">
            <div class="card border-0 shadow-sm">
              <a href="#">
                <img 
                  src="https://ngoteyawild.co.tz/wp-content/uploads/2023/11/NEW-MKOMAZI-COVER-01.jpgqq_-scaled.jpg" 
                  alt="Film 4" 
                  class="carousel-img"
                />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <!-- Scroll Scripts -->
    <script>
      const carousel = document.getElementById('filmsCarousel');
      document.getElementById('filmsScrollLeft').addEventListener('click', () => {
        carousel.scrollBy({ left: -350, behavior: 'smooth' });
      });
      document.getElementById('filmsScrollRight').addEventListener('click', () => {
        carousel.scrollBy({ left: 350, behavior: 'smooth' });
      });
    </script>
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
  
      <!-- Dummy Client Logos Grid -->
      <div class="row row-cols-2 row-cols-md-4 row-cols-lg-6 g-4 justify-content-center align-items-center text-center">
        @foreach ([
          'client1.webp', 'aml.png', 'crd.png', 'kcb.png', 'taifagas.png', 'equit.png'
        ] as $image)
          <div class="col">
            <div class=" p-2 d-flex align-items-center justify-content-center" style="width: 100%; height: 120px;">
              <img src="{{ asset('images/' . $image) }}" alt="Client Logo" class="img-fluid" style="max-height: 100%; max-width: 100%; object-fit: contain;">
            </div>
          </div>
        @endforeach
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
<!-- JS for Navigation and Scroll Effects -->
<script>
    document.addEventListener("DOMContentLoaded", function () {
      const carousel = document.getElementById("filmsCarousel");
      const scrollLeftBtn = document.getElementById("filmsScrollLeft");
      const scrollRightBtn = document.getElementById("filmsScrollRight");
      const scrollAmount = 350;
  
      const items = Array.from(carousel.children);
  
      // Repeat original items 4 more times (total 5 loops)
      for (let i = 0; i < 4; i++) {
        items.forEach(item => {
          carousel.appendChild(item.cloneNode(true));
        });
      }
  
      scrollRightBtn.addEventListener("click", () => {
        carousel.scrollBy({ left: scrollAmount, behavior: "smooth" });
      });
  
      scrollLeftBtn.addEventListener("click", () => {
        carousel.scrollBy({ left: -scrollAmount, behavior: "smooth" });
      });
    });
  </script>


@endsection