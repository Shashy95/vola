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
          
          /* Hero content styling */
          .hero-content {
              z-index: 2;
          }
          
          /* Section transitions */
          section {
              position: relative;
              overflow: hidden;
          }
          
          /* Enhanced carousel styling */
          .carousel-item {
              transition: transform 0.5s ease;
          }
          
          .carousel-item:hover {
              transform: translateY(-5px);
          }
          
          /* Card enhancements */
          .card {
              transition: transform 0.3s ease, box-shadow 0.3s ease;
              border: none;
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
          }
          
          .card:hover {
              transform: translateY(-5px);
              box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
          }
          
          /* Section dividers */
          .section-divider {
              height: 3px;
              width: 50px;
              background: #007bff;
              margin: 0 auto 30px;
          }
          
          /* Feature icons enhancement */
          .feature-icon {
              width: 60px;
              height: 60px;
              display: flex;
              align-items: center;
              justify-content: center;
              border-radius: 50%;
              background-color: rgba(0, 123, 255, 0.1);
              margin-bottom: 15px;
              transition: transform 0.3s ease;
          }
          
          .feature-icon:hover {
              transform: scale(1.1);
          }
          
          .feature-icon i {
              font-size: 24px;
              color: #007bff;
          }
          
          /* Button styling */
          .btn-custom {
              padding: 10px 25px;
              border-radius: 30px;
              font-weight: 500;
              letter-spacing: 0.5px;
              transition: all 0.3s ease;
          }
          
          .btn-custom:hover {
              transform: translateY(-2px);
              box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
          }

          /* Add this CSS to your stylesheet or in a <style> tag in your head section */

/* Ensure smooth transitions for navbar changes */
.navbar.transition {
    transition: all 0.3s ease;
}

/* Adding semi-transparent background to mobile menu for better visibility */
@media (max-width: 992px) {
    #navCollapse {
        background-color: rgba(33, 37, 41, 0.95);
        margin: 0 -1rem;
        padding: 1rem;
        border-radius: 0 0 8px 8px;
    }
    
    /* Ensuring text is visible in mobile menu */
    #navCollapse .nav-link {
        padding: 0.75rem 1rem;
        border-radius: 4px;
    }
    
    #navCollapse .nav-link:hover, 
    #navCollapse .nav-link:focus {
        background-color: rgba(255, 255, 255, 0.1);
    }

    #mainNavbar {
        background-color: rgba(33, 37, 41, 0.95) !important; /* dark background */
        backdrop-filter: blur(10px);
    }
    .navbar-brand img {
        filter: brightness(100%);
    }
    
}

/* Make sure navbar appears above other content */
.navbar {
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
}

.navbar-toggler-icon {
    background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 30 30'%3e%3cpath stroke='rgba%28255, 255, 255, 0.9%29' stroke-linecap='round' stroke-miterlimit='10' stroke-width='2' d='M4 7h22M4 15h22M4 23h22'/%3e%3c/svg%3e");
}
.navbar-overlay {
    background-color: rgba(33, 37, 41, 0.8); /* Semi-transparent dark */
    backdrop-filter: blur(10px);
    transition: all 0.3s ease;
}



      </style>
      
      

        @yield('styles')
    </head>
    <body data-mobile-nav-style="classic">  
        @include('layouts.header')
        
        @yield('content')
        
        @include('layouts.footer')
        

        <script type="text/javascript" src="{{ asset('js/jquery.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/vendors.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/main.js') }}"></script>

        <script>
document.addEventListener('DOMContentLoaded', function() {
    // Navbar background color change on scroll
    const navbar = document.getElementById('mainNavbar');
    const logo = document.getElementById('logo');
    
    // Function to handle navbar appearance based on scroll position
    function handleScroll() {
    if (window.scrollY > 50) {
        navbar.classList.remove('bg-transparent');
        navbar.classList.add('navbar-overlay');
    } else {
        navbar.classList.add('bg-transparent');
        navbar.classList.remove('navbar-overlay');
    }
}

    
    // Initial call to set proper state
    handleScroll();
    
    // Add scroll event listener
    window.addEventListener('scroll', handleScroll);
    
    // Fix for hamburger menu toggle
    const navbarToggler = document.querySelector('.navbar-toggler');
    const navbarCollapse = document.getElementById('navCollapse');
    
    navbarToggler.addEventListener('click', function () {
    if (!navbarCollapse.classList.contains('show')) {
        navbar.classList.add('navbar-overlay');
    } else if (window.scrollY <= 50) {
        navbar.classList.remove('navbar-overlay');
        navbar.classList.add('bg-transparent');
    }
    
});

});
        </script>
      
      
        @yield('scripts')
    </body>
</html>

