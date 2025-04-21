@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
<!-- Page Header with Background Image -->
<section class="position-relative vh-50 d-flex align-items-center">
    <div class="bg-dark position-absolute w-100 h-100 top-0 start-0" style="background: linear-gradient(rgba(0,0,0,0.7), rgba(0,0,0,0.7)), url('{{ asset('images/contact-bg.jpg') }}') center/cover no-repeat; min-height: 350px;"></div>
    <div class="container position-relative text-white text-center py-5 my-5">
        <h1 class="display-2 fw-bold mb-4 animate__animated animate__fadeInUp">Contact Us</h1>
        <p class="lead mb-0 animate__animated animate__fadeInUp animate__delay-1s">We'd love to hear from you and discuss your project</p>
    </div>
</section>

<!-- Contact Information Section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="display-4 mb-3">Get In Touch</h2>
                <div class="section-divider"></div>
                <p class="lead text-muted mb-5">Have a project in mind? Let's work together to create something amazing.</p>
            </div>
        </div>
        
        <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
            <div class="col">
                <div class="card h-100 text-center p-4 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-geo-alt text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="card-title fw-bold">Our Location</h5>
                        <p class="card-text text-muted">123 Film Studio Way<br>Los Angeles, CA 90210</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100 text-center p-4 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-envelope text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="card-title fw-bold">Email Us</h5>
                        <p class="card-text text-muted">info@yourstudio.com<br>projects@yourstudio.com</p>
                    </div>
                </div>
            </div>
            
            <div class="col">
                <div class="card h-100 text-center p-4 border-0 shadow-sm">
                    <div class="card-body">
                        <div class="mb-3">
                            <i class="bi bi-telephone text-primary" style="font-size: 2rem;"></i>
                        </div>
                        <h5 class="card-title fw-bold">Call Us</h5>
                        <p class="card-text text-muted">(555) 123-4567<br>(555) 765-4321</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contact Form Section -->
<section class="py-5 bg-white">
    <div class="container py-4">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="card border-0 shadow-lg p-3 p-md-5">
                    <div class="card-body">
                        <h3 class="card-title fw-bold mb-4 text-center">Send Us a Message</h3>
                        
                        @if(session('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                {{ session('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif
                        
                        <form action="" method="POST" id="contactForm">
                            @csrf
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" placeholder="Your Name" value="{{ old('name') }}" required>
                                 
                                        @error('name')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-md-6">
                                    <div class="form-floating mb-3">
                                        <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" placeholder="Your Email" value="{{ old('email') }}" required>
                                      
                                        @error('email')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <input type="text" class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject" placeholder="Subject" value="{{ old('subject') }}" required>
                                       
                                        @error('subject')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                              
                                
                                <div class="col-12">
                                    <div class="form-floating mb-3">
                                        <textarea class="form-control @error('message') is-invalid @enderror" id="message" name="message" placeholder="Your Message" style="height: 200px" required></textarea>
                                      
                                        @error('message')
                                            <div class="invalid-feedback">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                
                              
                                
                                <div class="col-12 text-center">
                                    <button type="submit" class="btn btn-primary btn-lg px-5">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Map Section -->
<section class="py-5 bg-light">
    <div class="container py-4">
        <div class="row justify-content-center mb-5">
            <div class="col-lg-7 text-center">
                <h2 class="display-4 mb-3">Our Location</h2>
                <div class="section-divider"></div>
                <p class="lead text-muted mb-5">Find us in the heart of the film district</p>
            </div>
        </div>
        
        <div class="row">
            <div class="col-12">
                <div class="ratio ratio-21x9 rounded overflow-hidden shadow-lg">
                    <!-- Replace with your actual Google Maps embed code -->
                    <iframe 
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126343.24848701756!2d39.17893628053022!3d-6.792354435233763!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c9a3bbd6607%3A0x49d90e60dbf85b8a!2sDar%20es%20Salaam!5e0!3m2!1sen!2stz!4v1713700000000!5m2!1sen!2stz" 
                    width="600" 
                    height="450" 
                    style="border:0;" 
                    allowfullscreen="" 
                    loading="lazy" 
                    referrerpolicy="no-referrer-when-downgrade">
                  </iframe>
                    
                </div>
            </div>
        </div>
    </div>
</section>



@endsection

@section('scripts')

@endsection