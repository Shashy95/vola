<!doctype html>
<html class="no-js" lang="en">
    <head>
        <title>Crafto - The Multipurpose HTML5 Template</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="author" content="ThemeZaa">
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

        <style>
          /* Hide scrollbars but keep functionality */
          #filmsCarousel::-webkit-scrollbar,
          #awardsCarousel::-webkit-scrollbar {
              display: none; /* For Chrome, Safari and Opera */
          }
          
          #filmsCarousel,
          #awardsCarousel {
              -ms-overflow-style: none;  /* IE and Edge */
              scrollbar-width: none;  /* Firefox */
          }
          
          /* Continuous scrolling for awards section */
          .awards-container {
              position: relative;
              overflow: hidden;
              width: 100%;
              padding: 20px 0;
          }
          
          .awards-track {
              display: flex;
              width: calc(300px * 12); /* 6 items * 2 (duplicated) * width */
              animation: scroll 30s linear infinite;
          }
          
          @keyframes scroll {
              0% { transform: translateX(0); }
              100% { transform: translateX(calc(-300px * 6)); } /* Half of total width */
          }
          
          /* Pause animation on hover */
          .awards-container:hover .awards-track {
              animation-play-state: paused;
          }
          
          /* Button styling for scroll controls */
          button[id^="scroll"],
          button[id^="filmsScroll"] {
              background-color: rgba(255, 255, 255, 0.8) !important;
              color: #212529 !important;
              border-radius: 50%;
              width: 45px;
              height: 45px;
              display: flex;
              align-items: center;
              justify-content: center;
              box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
              transition: transform 0.2s ease, background-color 0.2s ease !important;
              z-index: 10;
          }
      
          button[id^="scroll"]:hover,
          button[id^="filmsScroll"]:hover {
              transform: scale(1.05);
              background-color: rgba(255, 255, 255, 0.9) !important;
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
      
        @yield('scripts')
    </body>
</html>

