@extends('layouts.app')

@section('styles')
<style>
    .photographer-frame {
        position: relative;
        overflow: hidden;
        border-radius: 1rem;
    }

    .photographer-frame img {
        transition: transform 0.5s ease;
    }

    .photographer-frame:hover img {
        transform: scale(1.05);
    }

    .photo-overlay {
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(45deg, rgba(0,0,0,0.1), transparent);
        pointer-events: none;
    }

    .experience-badge {
        animation: float 3s ease-in-out infinite;
    }

    @keyframes float {
        0%, 100% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
    }

    .feature-icon {
        width: 40px;
        height: 40px;
        background: rgba(var(--bs-primary-rgb), 0.1);
        border-radius: 50%;
        display: flex;
        align-items: center;
        justify-content: center;
        flex-shrink: 0;
    }

    .stat-item:hover .stat-number {
        transform: scale(1.1);
        transition: transform 0.3s ease;
    }

    .philosophy-card {
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .philosophy-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 30px rgba(0,0,0,0.1) !important;
    }

    .specialization-card {
        background: linear-gradient(135deg, rgba(255,255,255,0.1), rgba(255,255,255,0.05));
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255,255,255,0.1);
        transition: transform 0.3s ease;
    }

    .specialization-card:hover {
        transform: translateY(-10px);
    }

    .btn {
        transition: all 0.3s ease;
    }

    .btn:hover {
        transform: translateY(-2px);
    }

    :root {
        --bs-primary: #0066cc;
        --bs-primary-rgb: 0, 102, 204;
    }
</style>
@endsection

@section('content')

<!-- Page Title Section -->
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url('images/about.png')">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{"translateY":[15,0],"opacity":[0,1],"duration":600,"delay":0,"staggervalue":300,"easing":"easeOutQuad"}'>About</h1>
            </div>
            <div class="down-section text-center" data-anime='{"translateY":[-15,0],"opacity":[0,1],"duration":600,"delay":0,"staggervalue":300,"easing":"easeOutQuad"}'>
                <a href="#about-vola" class="section-link">
                    <div class="d-flex justify-content-center align-items-center mx-auto rounded-circle fs-30 text-white">
                        <i class="feather icon-feather-chevron-down"></i>
                    </div>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- About VOLA Section -->
<section id="down-section">
    <div class="container">
        <!-- Top row: Image + Text -->
        <div class="row align-items-center justify-content-center">
            <!-- Left Column: Image and Video -->
            <div class="col-lg-5 col-md-10 position-relative z-index-1 md-mb-40px">
                <div class="atropos" data-atropos>
                    <div class="atropos-scale" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                        <div class="atropos-rotate">
                            <div class="atropos-inner">
                                <div data-atropos-offset="3">
                                    <img src="{{ asset('images/about_left.png') }}" class="border-radius-6px w-100" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="absolute-middle-right md-absolute-middle-center right-minus-45px md-right-auto d-inline-block text-center z-index-9">
                    <a href="https://www.youtube.com/watch?v=cfXHhfNy7tU"
                       class="bg-white box-shadow-extra-large rounded-circle video-icon-box video-icon-extra-large popup-youtube d-inline-block"
                       data-anime='{ "translate": [0, 0], "scale": [0,1], "duration": 1000, "delay": 300, "staggervalue": 300, "easing": "easeOutBack" }'>
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

            <!-- Right Column: Text Content -->
            <div class="col-xl-5 col-lg-6 offset-lg-1 col-md-9 ps-6 text-center text-lg-start lg-ps-15px"
                 data-anime='{ "el": "childs", "translateY": [50, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <span class="badge bg-solitude-blue text-uppercase text-base-color px-3 py-2 rounded-pill mb-3 fw-500 border-radius-100px d-inline-block mb-25px">
                    <i class="fas fa-microphone me-2"></i>Voice of the Voiceless
                </span>
                <h5 class="display-5 fw-bold text-dark mb-4 lh-1">
                    About<br><span class="text-base-color">VOLA Africa</span>
                </h5>
                <p class="mb-3">
                    <strong>VOLA</strong>—born from the phrase <em><strong>"Voice of the Voiceless Africans"</strong></em>—is more than a name;
                    it's a call, a rhythm, a pulse. Crafted with intention and creativity, it stands as a symbol of those often 
                    unheard—echoing through communities, ecosystems, and hidden corners of the continent.
                </p>
                <p class="mb-3">
                    At <strong>VOLA Media Hub</strong>, we love to be called <strong>VOLA Africa</strong> as a brand name,
                    however we believe stories can shift worlds. That media, in its purest form, is not just a tool but a vessel—one
                    that carries the voices of the silenced into the heart of global conversations. We are inspired by nature
                    conservation and telling African stories—those rooted in truth, resilience, and beauty.
                </p>

                 <p class="mb-3">
                            Nature is not just our backdrop; it is our muse, our message, and often, our most eloquent storyteller. 
                            Here, advocacy dances with art. Communication becomes creation. From forest canopies to city streets, 
                            from forgotten villages to thriving grassroots movements, we give breath to voices that deserve to be heard—and remembered.
                  </p>
               
                <p class="mb-4 text-base-color fw-500">
                    VOLA is not just a hub. It is a movement. A sanctuary for stories. A stage for truth. A bridge between silence and sound.
                </p>
            </div>
        </div>

        <!-- Bottom row: Stats -->
        <div class="row align-items-center justify-content-center mt-7 ps-5 sm-mt-35px lg-ps-0 pe-5 lg-pe-0">
            <!-- Experience Block -->
            <div class="col-md-6 col-sm-8 md-mb-35px">
                <div class="row align-items-center justify-content-center"
                     data-anime='{ "translateY":[0, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="col-auto">
                        <span class="alt-font text-dark-gray fw-600 fs-130 lg-fs-110 ls-minus-7px">30</span>
                    </div>
                    <div class="col-5 col-xl-4 col-lg-5 col-sm-6">
                        <h6 class="fw-500 text-dark-gray alt-font m-0 ls-minus-1px">Years experience working.</h6>
                    </div>
                    <div class="col-3 col-xl-3 col-md-2 text-center d-none d-lg-inline-block">
                        <span class="fw-400 fs-110 text-base-color position-relative top-minus-10px">|</span>
                    </div>
                </div>
            </div>

            <!-- Metrics Block -->
            <div class="col-lg-6 col-md-10 overflow-hidden">
                <div class="row align-items-center"
                     data-anime='{ "el": "childs", "translateY":[0, 0], "opacity": [0,1], "duration": 800, "delay": 200, "staggervalue": 100, "easing": "easeOutQuad" }'>
                    <div class="col-sm-6 last-paragraph-no-margin text-center xs-mb-35px">
                        <h2 class="fw-700 text-dark-gray mb-5px alt-font">5M+</h2>
                        <span class="fs-18 alt-font ls-minus-05px fw-500 text-dark-gray">Project completed</span>
                   
                    </div>
                    <div class="col-sm-6 last-paragraph-no-margin text-center">
                        <h2 class="fw-700 text-dark-gray mb-5px alt-font">64K</h2>
                        <span class="fs-18 alt-font ls-minus-05px fw-500 text-dark-gray">Satisfied customer</span>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- start section -->
<section class="bg-solitude-blue">
    <div class="container">
        <div class="row justify-content-center mb-3">
            <div class="col-xl-5 col-lg-6 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">Our Mission & Vision</h3>
            </div>
        </div>
        <div class="row g-4" data-anime='{ "el": "childs", "perspective": [1200,1200], "translateY": [30, 0], "scale": [1.05, 1], "rotateX": [30, 0], "opacity": [0,1], "duration": 800, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
            <!-- start fancy text box item -->
          <!-- Mission Card -->
            <div class="col-lg-6">
                <div class="philosophy-card h-100 p-4 bg-white shadow-sm rounded-4 border-start border-4 border-base-color">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-wrapper me-3">
                            <i class="fas fa-compass text-base-color fs-3"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-0">Mission</h4>
                    </div>
                    <p class="text-muted lh-lg mb-0">
                        <strong>Inspired by nature conservation and the art of telling African stories</strong>, our mission is to lift the 
                        <strong>voices of the voiceless—people, wildlife, and communities</strong> alike. We are dedicated not only to empowering 
                        individuals and creatures but also to supporting <strong><em>organizations and media houses</em></strong> as they find their voice to 
                        connect meaningfully with clients and donors. Through the transformative power of media, we illuminate untold stories, 
                        spark change, and amplify truth. VOLA Media Hub is a creative force driving visibility, justice, and empowerment across Africa.
                    </p>
                </div>
            </div>

            <!-- Vision Card -->
            <div class="col-lg-6">
                <div class="philosophy-card h-100 p-4 bg-white shadow-sm rounded-4 border-start border-4 border-base-color">
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-wrapper me-3">
                           <i class="fas fa-binoculars text-base-color fs-3"></i>
                        </div>
                        <h4 class="fw-bold text-dark mb-0">Vision</h4>
                    </div>
                    <p class="text-muted lh-lg mb-0">
                        To become Africa's leading media platform for advocacy, storytelling, and empowerment—<strong>a trusted voice for the voiceless</strong> 
                        and a catalyst for positive change. We envision a continent where every person, community, ecosystem, and organization is seen, 
                        heard, and valued—where media is used not just to inform, but to inspire action, protect the vulnerable, and build a more just, 
                        inclusive, and sustainable future for all.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- end section -->

 <!-- start section -->
<section class="bg-gradient-solitude-blue-transparent pt-0">
    <div class="container">  
         <div class="row justify-content-center mb-3 mt-4">
            <div class="col-xl-5 col-lg-6 col-sm-8 text-center" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>
                <h3 class="alt-font text-dark-gray fw-600 ls-minus-2px">Testimonial</h3>
            </div>
        </div>  
        <div class="row row-cols-1 row-cols-lg-3 row-cols-md-2 justify-content-center mt-4 sm-mt-40px" data-anime='{ "el": "childs", "translateY": [30, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>          
            <!-- start testimonials item -->
            <div class="col testimonials-style-01 md-mb-30px">
                <div class="position-relative bg-white testimonial-arrow ps-50px pe-50px pt-30px pb-30px lg-p-30px border-radius-10px box-shadow-quadruple-large">
                    <span>Lorem ipsum dolor amet ipsum adipiscing elit eiusmod tempor lorem ipsum incididunt.</span>
                </div>
                <div class="mt-10px pt-20px pb-20px ps-15px pe-15px">
                    <img src="images/avtar-27.jpg" class="w-80px h-80px rounded-circle me-15px" alt="" />
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
                    <img src="images/avtar-28.jpg" class="w-80px h-80px rounded-circle me-15px" alt="" />
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
                    <img src="images/avtar-29.jpg" class="w-80px h-80px rounded-circle me-15px" alt="" />
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






@endsection
