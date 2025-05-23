(function ($) {
    'use strict';
    $.fn.andSelf = function () {
      return this.addBack.apply(this, arguments);
    }
  
    if ($('.example-1').length) {
      $('.example-1').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        autoplay: true,
        autoplayTimeout: 4500,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      });
    }
  
    if ($('.full-width').length) {
      const itemCount = $('.full-width.owl-carousel .item').length;
  
      $('.full-width').owlCarousel({
          loop: itemCount > 1, // prevent looping if only 1 item
          margin: 20,
          nav: itemCount > 1,
          autoplay: itemCount > 1,
          autoplayTimeout: 5500,
          navText: [
              "<i class='ti-angle-left'></i>",
              "<i class='ti-angle-right'></i>"
          ],
          responsive: {
              0: {
                  items: 1
              },
              600: {
                  items: Math.min(2, itemCount)
              },
              1000: {
                  items: Math.min(3, itemCount)
              }
          }
      });
  }
  

    if ($('.full-width2').length) {
      const itemCount = $('.full-width2.owl-carousel .item').length;
    $('.full-width2').owlCarousel({
      loop: itemCount > 1, // prevent looping if only 1 item
      margin: 20,
      nav: itemCount > 1,
      autoplay: itemCount > 1,
      autoplayTimeout: 5500,
      navText: [
          "<i class='ti-angle-left'></i>",
          "<i class='ti-angle-right'></i>"
      ],
      responsive: {
          0: {
              items: 1
          },
          600: {
              items: Math.min(2, itemCount)
          },
          1000: {
              items: Math.min(3, itemCount)
          }
      }
    });
  }

  
    if ($('.loop').length) {
      $('.loop').owlCarousel({
        center: true,
        items: 2,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 8500,
        responsive: {
          600: {
            items: 4
          }
        }
      });
    }
  
    if ($('.nonloop').length) {
      $('.nonloop').owlCarousel({
        items: 5,
        loop: false,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 6000,
        responsive: {
          600: {
            items: 4
          }
        }
      });
    }
  
    if ($('.auto-width').length) {
      $('.auto-width').owlCarousel({
        items: 2,
        margin: 10,
        loop: true,
        autoplay: true,
        autoplayTimeout: 3500,
        autoWidth: true,
      });
    }
  
    if ($('.lazy-load').length) {
      $('.lazy-load').owlCarousel({
        items: 4,
        lazyLoad: true,
        loop: true,
        margin: 10,
        auto: true,
        autoplay: true,
        autoplayTimeout: 2500,
      });
    }
  
    if ($('.rtl-carousel').length) {
      $('.rtl-carousel').owlCarousel({
        rtl: true,
        loop: true,
        margin: 10,
        autoplay: true,
        autoplayTimeout: 3000,
        responsive: {
          0: {
            items: 1
          },
          600: {
            items: 3
          },
          1000: {
            items: 5
          }
        }
      });
    }
  
    if ($('.video-carousel').length) {
      $('.video-carousel').owlCarousel({
        loop: false,
        margin: 10,
        video: true,
        lazyLoad: true,
        autoplay: true,
        autoplayTimeout: 7000,
        responsive: {
          480: {
            items: 4
          },
          600: {
            items: 4
          }
        }
      });
    }
  
  })(jQuery);