{{-- gallery.blade.php --}}
@extends('layouts.app')
@section('styles')
<style>
    /* Modern Gallery Styles */
    .gallery-popup {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.95);
        backdrop-filter: blur(10px);
        display: none;
        justify-content: center;
        align-items: center;
        z-index: 9999;
        opacity: 0;
        transition: opacity 0.3s ease;
    }
    
    .gallery-popup.show {
        opacity: 1;
    }
    
    .gallery-popup-content {
        position: relative;
        max-width: 90vw;
        max-height: 90vh;
        text-align: center;
        animation: zoomIn 0.3s ease-out;
    }
    
    .gallery-popup-content img {
        max-width: 100%;
        max-height: 100%;
        border-radius: 12px;
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.5);
        object-fit: contain;
    }
    
    .gallery-popup-btn {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 50px;
        height: 50px;
        font-size: 1.5rem;
        color: white;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .gallery-popup-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: translateY(-50%) scale(1.1);
    }
    
    .prev-btn { left: 30px; }
    .next-btn { right: 30px; }
    
    .close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 40px;
        height: 40px;
        font-size: 1.5rem;
        color: white;
        background: rgba(255, 255, 255, 0.1);
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        cursor: pointer;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    
    .close-btn:hover {
        background: rgba(255, 255, 255, 0.2);
        transform: scale(1.1);
    }

    

    /* Gallery Grid */


    .gallery-item {
        position: relative;
        width: 100%;
        height: 300px;
        border-radius: 16px;
        overflow: hidden;
        cursor: pointer;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        background: linear-gradient(45deg, #f0f0f0, #e0e0e0);
    }

    .gallery-item::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(135deg, 
            rgba(102, 126, 234, 0) 0%, 
            rgba(102, 126, 234, 0.1) 50%, 
            rgba(118, 75, 162, 0.2) 100%);
        opacity: 0;
        transition: opacity 0.4s ease;
        z-index: 2;
    }

    .gallery-item:hover::before {
        opacity: 1;
    }

    .gallery-item img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        transition: transform 0.6s cubic-bezier(0.25, 0.46, 0.45, 0.94);
    }

    .gallery-item:hover {
        transform: translateY(-8px) scale(1.02);
        box-shadow: 0 25px 50px rgba(0, 0, 0, 0.2);
    }

    .gallery-item:hover img {
        transform: scale(1.1);
    }

    .gallery-item::after {
        content: '';
        position: absolute;
        top: 50%;
        left: 50%;
        width: 60px;
        height: 60px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 50%;
        transform: translate(-50%, -50%) scale(0);
        transition: transform 0.3s ease;
        z-index: 3;
        backdrop-filter: blur(10px);
    }

    .gallery-item:hover::after {
        transform: translate(-50%, -50%) scale(1);
    }

    /* Add a play icon */
    .gallery-item:hover::after {
        background-image: url("data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 24 24' fill='%23333'%3E%3Cpath d='M8 5v14l11-7z'/%3E%3C/svg%3E");
        background-repeat: no-repeat;
        background-position: center;
        background-size: 24px;
    }

    /* Section Styling */
    .gallery-section {
        background: linear-gradient(135deg, #f8fafc 0%, #f1f5f9 100%);
        position: relative;
    }

    .gallery-section::before {
        content: '';
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        height: 100px;
        background: linear-gradient(to bottom, white, transparent);
        pointer-events: none;
    }

    .section-title {
        background: linear-gradient(135deg, #667eea, #764ba2);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
        font-weight: 700;
        letter-spacing: -2px;
        margin-bottom: 20px;
    }

    /* Loader */
    .spinner-border {
        width: 3rem;
        height: 3rem;
        border: 0.25em solid rgba(102, 126, 234, 0.2);
        border-right-color: #667eea;
        border-radius: 50%;
        animation: spinner-border 0.75s linear infinite;
    }

    /* Animations */
    @keyframes fadeInUp {
        from {
            opacity: 0;
            transform: translateY(30px);
        }
        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes zoomIn {
        from {
            opacity: 0;
            transform: scale(0.8);
        }
        to {
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes spinner-border {
        to {
            transform: rotate(360deg);
        }
    }

    /* Responsive Design */
    @media (max-width: 768px) {
      
        
        .gallery-item {
            height: 250px;
        }
        
        .page-title-big-typography h1 {
            font-size: 2.5rem;
            letter-spacing: -2px;
        }
        
        .gallery-popup-btn {
            width: 40px;
            height: 40px;
            font-size: 1.2rem;
        }
        
        .prev-btn { left: 15px; }
        .next-btn { right: 15px; }
        .close-btn { top: 15px; right: 15px; }
    }

    @media (max-width: 480px) {
      
        
        .gallery-item {
            height: 200px;
            border-radius: 12px;
        }
    }


   
</style>
@endsection

@section('content')
<section class="page-title-big-typography bg-dark-gray ipad-top-space-margin" data-parallax-background-ratio="0.5" style="background-image: url('images/gallery.png')">
    <div class="opacity-extra-medium bg-dark-slate-blue"></div>
    <div class="container">
        <div class="row align-items-center justify-content-center extra-small-screen">
            <div class="col-12 position-relative text-center page-title-extra-large">
                <h1 class="m-auto text-white text-shadow-double-large fw-500 ls-minus-3px xs-ls-minus-2px">Gallery</h1>
            </div>
        </div>
    </div>
</section>

<section class="overflow-hidden">
    <div class="container">
        <div class="row justify-content-center mb-60px">
            <div class="col-lg-8 text-center">
                <h2 class="alt-font fw-600 text-dark-gray ls-minus-2px mb-20px">Our Gallery</h2>
                <p class="text-medium-gray mb-0">Explore our collection of memorable moments and beautiful captures.</p>
            </div>
        </div>

        <div id="gallery-container" class="row g-30px gallery-grid">
            @include('pages.gallery-items', ['gallery' => $gallery])
        </div>

        <div id="loader" class="text-center my-4" style="display:none;">
            <div class="spinner-border text-dark-gray" role="status"></div>
        </div>
    </div>
</section>

<div id="gallery-popup" class="gallery-popup">
    <button class="close-btn" aria-label="Close">&times;</button>
    <button class="gallery-popup-btn prev-btn" aria-label="Previous">&#10094;</button>
    <div class="gallery-popup-content">
        <img id="popup-image" src="" alt="Gallery Image">
    </div>
    <button class="gallery-popup-btn next-btn" aria-label="Next">&#10095;</button>
</div>
@endsection

@section('scripts')
<script>
    let page = 1;
    let loading = false;
    let hasMorePages = true;
    const galleryContainer = document.getElementById('gallery-container');
    const loader = document.getElementById('loader');
    const popup = document.getElementById('gallery-popup');
    const popupImage = document.getElementById('popup-image');
    let currentIndex = 0;
    let images = [];

    function updateImages() {
        images = Array.from(document.querySelectorAll('.gallery-item'));
    }

    // Smooth scroll loading
    let scrollTimeout;
    window.addEventListener('scroll', () => {
        clearTimeout(scrollTimeout);
        scrollTimeout = setTimeout(() => {
            if (loading || !hasMorePages) return;
            const scrollPosition = window.innerHeight + window.scrollY;
            const bottom = document.body.offsetHeight - 200;
            if (scrollPosition >= bottom) {
                loadMoreImages();
            }
        }, 100);
    });

    function loadMoreImages() {
        loading = true;
        page++;
        loader.style.display = 'block';
        
        fetch(`?page=${page}`, {
            headers: { 'X-Requested-With': 'XMLHttpRequest' }
        })
        .then(res => res.text())
        .then(data => {
            if (data.trim().length === 0) {
                hasMorePages = false;
                loader.innerHTML = '<p class="text-muted">No more images to load</p>';
                setTimeout(() => {
                    loader.style.display = 'none';
                }, 2000);
            } else {
                galleryContainer.insertAdjacentHTML('beforeend', data);
                updateImages();
                // Animate new items
                const newItems = galleryContainer.querySelectorAll('.gallery-item:not(.loaded)');
                newItems.forEach((item, index) => {
                    item.classList.add('loaded');
                    item.style.opacity = '0';
                    item.style.transform = 'translateY(30px)';
                    setTimeout(() => {
                        item.style.transition = 'all 0.6s ease';
                        item.style.opacity = '1';
                        item.style.transform = 'translateY(0)';
                    }, index * 100);
                });
            }
        })
        .catch(error => {
            console.error('Error loading more images:', error);
        })
        .finally(() => {
            if (hasMorePages) {
                loader.style.display = 'none';
            }
            loading = false;
        });
    }

    updateImages();

    // Gallery item click handler
    galleryContainer.addEventListener('click', (e) => {
        const item = e.target.closest('.gallery-item');
        if (!item) return;
        
        const allItems = Array.from(document.querySelectorAll('.gallery-item'));
        currentIndex = allItems.indexOf(item);
        popupImage.src = item.getAttribute('data-src');
        popup.style.display = 'flex';
        
        // Smooth show animation
        setTimeout(() => {
            popup.classList.add('show');
        }, 10);
        
        // Prevent body scroll
        document.body.style.overflow = 'hidden';
    });

    // Close popup
    function closePopup() {
        popup.classList.remove('show');
        setTimeout(() => {
            popup.style.display = 'none';
            document.body.style.overflow = 'auto';
        }, 300);
    }

    // Event listeners
    document.querySelector('.close-btn').onclick = closePopup;
    document.querySelector('.prev-btn').onclick = () => navigateImage(-1);
    document.querySelector('.next-btn').onclick = () => navigateImage(1);

    // Keyboard navigation
    document.addEventListener('keydown', (e) => {
        if (popup.style.display === 'flex') {
            switch(e.key) {
                case 'Escape':
                    closePopup();
                    break;
                case 'ArrowLeft':
                    navigateImage(-1);
                    break;
                case 'ArrowRight':
                    navigateImage(1);
                    break;
            }
        }
    });

    // Click outside to close
    popup.addEventListener('click', (e) => {
        if (e.target === popup) {
            closePopup();
        }
    });

    function navigateImage(dir) {
        const items = document.querySelectorAll('.gallery-item');
        if (!items.length) return;
        
        currentIndex = (currentIndex + dir + items.length) % items.length;
        
        // Add transition effect
        popupImage.style.opacity = '0';
        setTimeout(() => {
            popupImage.src = items[currentIndex].getAttribute('data-src');
            popupImage.style.opacity = '1';
        }, 150);
    }

    // Preload images for better performance
    function preloadImages() {
        const items = document.querySelectorAll('.gallery-item');
        items.forEach(item => {
            const img = new Image();
            img.src = item.getAttribute('data-src');
        });
    }

    // Initialize
    document.addEventListener('DOMContentLoaded', () => {
        preloadImages();
        
        // Add loading animation to initial items
        const initialItems = document.querySelectorAll('.gallery-item');
        initialItems.forEach((item, index) => {
            item.style.opacity = '0';
            item.style.transform = 'translateY(30px)';
            setTimeout(() => {
                item.style.transition = 'all 0.6s ease';
                item.style.opacity = '1';
                item.style.transform = 'translateY(0)';
            }, index * 100);
        });
    });
</script>
@endsection

