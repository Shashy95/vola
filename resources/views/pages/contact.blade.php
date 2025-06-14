@extends('layouts.app')

@section('styles')
<style>
  /* Ensure no break within the links container */
  .nowrap-label {
    white-space: nowrap;
  }
  .nowrap-links {
    white-space: nowrap;
    display: inline-flex;
    gap: 8px;
  }
</style>
@endsection

@section('content')
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url('images/contact.jpg')">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px" data-anime='{ "translateY": [15, 0], "opacity": [0,1], "duration": 600, "delay": 0, "staggervalue": 300, "easing": "easeOutQuad" }'>Contact</h1>
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
<section id="down-section" class="overflow-hidden">
    <div class="container"> 
        <div class="row g-0 justify-content-center">
            
            <div class="col-lg-5 col-md-6" data-anime='{ "translateX": [15, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
    <div class="bg-base-color p-18 lg-p-15 h-100" style="background-color: #10322c;"> 
        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">VOLA’s House</span>
        <p class="text-white opacity-5">VOLA House, Dar-View Street, Ilala Region, Dar es Salaam</p>

        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Stay connected with VOLA</span>
        <p>
            <a href="tel:+255689748534" class="text-white opacity-5 d-block">+255 689 748 534</a>
            <a href="tel:+255682901391" class="text-white opacity-5 d-block">+255 682 901 391</a>
        </p>

        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Email us</span>
        <a href="mailto:slihedule@volaafrica.com" class="text-white opacity-5 d-block">slihedule@volaafrica.com</a>

        <span class="text-white text-decoration-line-bottom mb-10px d-inline-block">Follow us</span>
        <div class="text-white opacity-5">
           <div class="d-flex justify-content-start" style="gap: 12px; align-items: center;">
  <span class="nowrap-label">Instagram:</span>
  <span class="nowrap-links">
    <a href="https://instagram.com/volaafrica" target="_blank" class="text-white" style="color: white; ">volaafrica</a> and 
    <a href="https://instagram.com/steve_wildfilms" target="_blank" class="text-white" style="color: white; ">steve_wildfilms</a>
  </span>
</div>
    <div class="d-flex justify-content-start">
        <span class="nowrap-label">X (Twitter):</span>
        <a href="https://x.com/volafrica" target="_blank" class="text-white" style="color: white; ">volafrica</a>
    </div>
    <div class="d-flex justify-content-start">
        <span class="nowrap-label">TikTok: </span>
        <a href="https://tiktok.com/@volaafrica" target="_blank" class="text-white" style="color: white; ">volaafrica</a>
    </div>
</div>

    </div>
</div>

            <div class="col-lg-5 offset-lg-1">  
                <div class="pt-5 md-pt-45px contact-form-style-01" data-anime='{ "translateX": [0, 0], "opacity": [0,1], "duration": 600, "delay": 300, "staggervalue": 300, "easing": "easeOutQuad" }'>
                    <h4 class="d-inline-block alt-font fw-600 text-dark-gray ls-minus-1px mb-30px">Feel free to reach via contact us form.</h4>
                    <!-- start contact form -->
                    <form action="email-templates/contact-form.php" method="post">
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-emoji-smile"></i></span>
                            <input type="text" name="name" class="form-control required" placeholder="Your name*">
                        </div> 
                        <div class="position-relative form-group mb-20px">
                            <span class="form-icon"><i class="bi bi-envelope"></i></span>
                            <input type="email" name="email" class="form-control required" placeholder="Your email address*">
                        </div> 
                        <div class="position-relative form-group form-textarea">
                            <span class="form-icon"><i class="bi bi-chat-square-dots"></i></span>
                            <textarea placeholder="Your message" name="comment" class="form-control" rows="3"></textarea>
                            <input type="hidden" name="redirect" value="">
                            <button class="btn btn-small btn-round-edge btn-dark-gray btn-box-shadow mt-20px m-auto submit" type="submit">Send message</button>
                            <div class="form-results mt-20px d-none"></div>
                        </div>
                    </form>
                    <!-- end contact form -->
                </div>
            </div>  
        </div>
    </div>
</section>
<!-- end section --> 
<!-- start section -->
<section class="p-0" id="location" data-anime='{ "translate": [0, 0], "opacity": [0,1], "duration": 600, "delay": 100, "staggervalue": 300, "easing": "easeOutQuad" }'>
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-12 p-0">
                <div class="ratio ratio-21x9 rounded overflow-hidden shadow-lg">
                    <!-- Replace with your actual Google Maps embed code -->
                <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.622852006649!2d39.27638201534828!3d-6.800372995030105!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x185c4c8f54c4a9d1%3A0x151e8f54f0eaa1a2!2sIlala%20Municipal%20Council%2C%20Dar%20es%20Salaam!5e0!3m2!1sen!2stz!4v1713700000000!5m2!1sen!2stz" 
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