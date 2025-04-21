@extends('layouts.app')

@section('title', 'Home')



@section('content')

<!-- Hero Section with Background Video and Text Overlay -->
<section class="position-relative overflow-hidden vh-100 d-flex align-items-center">
    <video autoplay muted loop playsinline class="w-100 h-100 object-fit-cover position-absolute top-0 start-0">
        <source src="{{ asset('videos/hero.mp4') }}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-60"></div>
    
    <!-- Hero Content -->
    {{-- 
    <div class="container hero-content text-white text-center">
        <h1 class="display-2 fw-bold mb-4 animate__animated animate__fadeInUp">Capturing Stories That Matter</h1>
        <p class="lead mb-5 animate__animated animate__fadeInUp animate__delay-1s">Award-winning film production company specializing in documentary storytelling</p>
        <div class="animate__animated animate__fadeInUp animate__delay-2s">
            <a href="#about" class="btn btn-light btn-custom me-3">Learn More</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-light btn-custom">Contact Us</a>
        </div>
    </div>
     
    
    <div class="position-absolute bottom-0 start-50 translate-middle-x mb-4 animate__animated animate__fadeInUp animate__delay-3s">
        <a href="#about" class="text-white">
            <i class="bi bi-chevron-down fs-2"></i>
        </a>
    </div>
--}}
</section>

<!-- About Section with Enhanced Features -->
<section id="about" class="py-5 bg-light">
    <div class="container py-4">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="display-4 mb-3">About Us</h2>
                <div class="section-divider"></div>
                <p class="lead text-muted mb-5">We craft compelling visual stories that captivate audiences and inspire action.</p>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-md-2 row-cols-lg-4 g-4 justify-content-center">
            @php
                $features = [
                    ['icon' => 'bi-shield-check', 'title' => 'World-class Services', 'text' => 'Premium production quality with attention to every detail'],
                    ['icon' => 'bi-hourglass', 'title' => 'Experience Strategy', 'text' => 'Strategic approach to storytelling that resonates with audiences'],
                    ['icon' => 'bi-award', 'title' => 'Award Winning', 'text' => 'Recognized excellence in documentary filmmaking'],
                    ['icon' => 'bi-briefcase', 'title' => 'Business Growth', 'text' => 'Help brands amplify their message and expand their reach'],
                ];
            @endphp
            
            @foreach($features as $feature)
                <div class="col">
                    <div class="text-center p-4">
                        <div class="feature-icon mx-auto">
                            <i class="bi {{ $feature['icon'] }}"></i>
                        </div>
                        <h5 class="fw-bold mt-3">{{ $feature['title'] }}</h5>
                        <p class="text-muted">{{ $feature['text'] }}</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Films Section with Enhanced Cards and Hidden Scrollbar -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="display-4 mb-3">Our Films</h2>
                <div class="section-divider"></div>
                <p class="lead text-muted mb-5">Explore our award-winning documentary collection</p>
            </div>
        </div>

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
                                <img src="{{ asset('images/film'.$i.'.jpg') }}" class="card-img-top" alt="Film {{ $i }}">
                                <div class="position-absolute top-0 end-0 m-2">
                                    <span class="badge bg-primary">2023</span>
                                </div>
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Film Title {{ $i }}</h5>
                                <p class="card-text text-muted">Brief description or tagline of the film that captures its essence.</p>
                                <a href="#" class="btn btn-sm btn-outline-primary">Watch Trailer</a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- Projects Section with Enhanced Cards -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="display-4 mb-3">Featured Projects</h2>
                <div class="section-divider"></div>
                <p class="lead text-muted mb-5">Discover our impactful work across different themes</p>
            </div>
        </div>
        
        <div class="row g-4">
            @foreach (range(1, 3) as $i)
                <div class="col-md-4">
                    <div class="card h-100">
                        <div class="position-relative overflow-hidden">
                            <img src="{{ asset('images/project' . $i . '.jpg') }}" class="card-img-top" alt="Project {{ $i }}">
                            <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark opacity-0 hover-overlay transition" 
                                 style="transition: all 0.3s ease;"></div>
                        </div>
                        <div class="card-body">
                            <h5 class="card-title fw-bold">Project Name {{ $i }}</h5>
                            <p class="card-text text-muted">Brief description of the project's focus and the impact it created on its audience.</p>
                            <div class="d-flex justify-content-between align-items-center mt-3">
                                <a href="#" class="btn btn-outline-primary btn-sm">Read More</a>
                                <div class="text-muted small">
                                    <i class="bi bi-calendar me-1"></i> {{ 2022 + $i }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Awards Section with Continuous Horizontal Scrolling -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="display-4 mb-3">Awards & Recognitions</h2>
                <div class="section-divider"></div>
                <p class="lead text-muted mb-5">Our work has been recognized at prestigious film festivals around the world</p>
            </div>
        </div>
    </div>

    <!-- Continuous scrolling awards carousel -->
    <div class="awards-container">
        <div class="awards-track">
            @foreach (range(1, 6) as $i)
                <div class="award-card flex-shrink-0 mx-3" style="width: 300px;">
                    <div class="card p-4 h-100">
                        <div class="text-center mb-3">
                            <i class="bi bi-trophy text-warning" style="font-size: 2rem;"></i>
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
                            <i class="bi bi-trophy text-warning" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="card-title fw-bold text-center">{{ ['Cannes Film Festival', 'Sundance', 'Toronto International', 'Berlin International', 'Venice Film Festival', 'Tribeca Film Festival'][$i-1] }}</h5>
                        <p class="card-text text-center text-muted">Awarded for excellence in documentary storytelling – {{ 2020 + $i }}.</p>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Call to Action Section -->
<section class="py-5 bg-primary text-white">
    <div class="container py-4 text-center">
        <h2 class="display-5 mb-4">Ready to Tell Your Story?</h2>
        <p class="lead mb-5">Let's collaborate to create compelling content that connects with your audience</p>
        <a href="{{ route('contact') }}" class="btn btn-light btn-lg btn-custom">Get in Touch</a>
    </div>
</section>

<!-- Partners Section with Improved Layout -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="display-4 mb-3">Our Partners</h2>
                <div class="section-divider"></div>
                <p class="lead text-muted mb-5">Proud to work with these amazing organizations</p>
            </div>
        </div>
        
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-5 justify-content-center align-items-center g-4">
            @foreach (range(1, 5) as $i)
                <div class="col text-center">
                    <div class="p-4 bg-white rounded shadow-sm h-100 d-flex align-items-center justify-content-center" style="min-height: 100px;">
                        <img src="{{ asset('images/partner' . $i . '.png') }}" alt="Partner {{ $i }}" class="img-fluid" style="max-height: 60px;">
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

<!-- Testimonials Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="display-4 mb-3">Client Testimonials</h2>
                <div class="section-divider"></div>
                <p class="lead text-muted mb-5">What our clients say about working with us</p>
            </div>
        </div>
        
        <div class="row g-4">
            @foreach (range(1, 3) as $i)
                <div class="col-md-4">
                    <div class="card h-100 p-4">
                        <div class="text-warning mb-3">
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                            <i class="bi bi-star-fill"></i>
                        </div>
                        <p class="card-text fst-italic">"{{ ['Working with this team transformed our brand story into a compelling visual narrative that resonated with our audience.', 'Their attention to detail and creative vision exceeded our expectations. The final documentary was simply outstanding.', 'A truly collaborative experience that resulted in an award-winning film we are proud to share with the world.'][$i-1] }}"</p>
                        <div class="d-flex align-items-center mt-4">
                            <div class="flex-shrink-0">
                                <img src="{{ asset('images/user_avatar.png') }}" class="rounded-circle" width="50" height="50" alt="Client {{ $i }}">
                            </div>
                            <div class="ms-3">
                                <h6 class="mb-0 fw-bold">{{ ['Sarah Johnson', 'Michael Chen', 'Emily Rodriguez'][$i-1] }}</h6>
                                <small class="text-muted">{{ ['CEO, Ecosystem Fund', 'Marketing Director, Tech Innovations', 'Producer, Global Documentaries'][$i-1] }}</small>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>

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