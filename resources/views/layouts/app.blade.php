<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
         <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0" />
        <meta name="description" content="Elevate your online presence with Crafto - a modern, versatile, multipurpose Bootstrap 5 responsive HTML5, SCSS template using highly creative 52+ ready demos.">
        <!-- favicon icon -->
        <link rel="shortcut icon" href="{{ asset('images/favicon.png') }}">
        <link rel="apple-touch-icon" href="{{ asset('images/apple-touch-icon-57x57.png') }}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('images/apple-touch-icon-72x72.png') }}">
        <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('images/apple-touch-icon-114x114.png') }}">
        <!-- google fonts preconnect -->
        <link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <!-- style sheets and font icons -->
        <link rel="stylesheet" href="{{ asset('css/vendors.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/icon.min.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/style.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}"/>
        <link rel="stylesheet" href="{{ asset('css/business.css') }}" />

        <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset('admin/assets/vendors/owl-carousel-2/owl.theme.default.min.css')}}">


        <style>

            /* Owl-carousel */
            .owl-carousel img {
                border-radius: 4px;
            }
            .owl-carousel.full-width .owl-nav,
            .owl-carousel.full-width2 .owl-nav {
                position: absolute;
                top: 30%;
                width: 100%;
                margin-top: 0;
            }

            .owl-carousel.full-width .owl-nav .owl-prev,
            .owl-carousel.full-width2 .owl-nav .owl-prev,
            .owl-carousel.full-width .owl-nav .owl-next,
            .owl-carousel.full-width2 .owl-nav .owl-next {
                background: transparent;
                color: #ffffff;
            }

            .owl-carousel.full-width .owl-nav .owl-prev i:before,
            .owl-carousel.full-width2 .owl-nav .owl-prev i:before,
            .owl-carousel.full-width .owl-nav .owl-next i:before,
            .owl-carousel.full-width2 .owl-nav .owl-next i:before {
                width: 60px;
                height: 60px;
                background: rgba(0, 0, 0, 0.5);
                border-radius: 100%;
                font-size: 1.875rem;
                font-weight: bold;
                line-height: 2;
                display: block;
            }

            .owl-carousel.full-width .owl-nav .owl-prev,
            .owl-carousel.full-width2 .owl-nav .owl-prev {
                float: left;
            }

            .owl-carousel.full-width .owl-nav .owl-next,
            .owl-carousel.full-width2 .owl-nav .owl-next {
                float: right;
            }

            .owl-carousel.full-width .owl-dots,
            .owl-carousel.full-width2 .owl-dots {
                margin-top: 1rem;
            }

            .owl-carousel .item-video {
                width: 200px;
                height: 200px;
            }
                    

            .project-card {
            /* Makes sure both the image and iframe are the same size */
            overflow: hidden;
            border-radius: 8px;
            }

            /* Ensures that both images and iframes cover their container equally */
            .project-card img, 
            .elementor-video-iframe {
                width: 100%;
                height: 100%;
                object-fit: contain;  /* Ensures both fit into the container */
            }

            .elementor-video-iframe {
                border: none; /* Removes border around the iframe */
                min-height: 220px;  /* Sets a minimum height to ensure consistency */
            }

            /* Container for both image and video */
            .project-card .position-relative {
                height: 220px;  /* Ensures both the image and iframe have the same height */
            }

      </style>

        @yield('styles')
    </head>
    <body data-mobile-nav-style="classic">  
        @include('layouts.header')
        
        @yield('content')
        
        @include('layouts.footer')

          <!-- start scroll progress -->
          <div class="scroll-progress d-none d-xxl-block">
            <a href="#" class="scroll-top" aria-label="scroll">
              <span class="scroll-text">Scroll</span><span class="scroll-line"><span class="scroll-point"></span></span>
            </a>
          </div>
        

        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/vendors/owl-carousel-2/owl.carousel.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('admin/assets/js/owl-carousel.js')}}"></script>


        @yield('scripts')
    </body>
</html>

