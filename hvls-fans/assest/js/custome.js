
// Sticky Header
var header = $("nav.navbar-expand-lg");
$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 50) {
    header.addClass("scrolled");
  } else {
    header.removeClass("scrolled");
  }
});


// header js start
$(document).ready(function(){
  $('.nav-link').on('click', function() {
    // Remove 'active' class from all nav-links
    $('.nav-link').removeClass('active');
    // Add 'active' class to the clicked nav-link
    $(this).addClass('active');
  });
});

// header js end

// banner swiper slider//
$(document).ready(function() {
  new WOW().init();
  var swiper = new Swiper(".parallax-slider", {
      speed: 1000,
      parallax: true,
      loop: true,
      // autoplay: {
      //     delay: 5000, // Adjust autoplay delay as needed
      //     disableOnInteraction: false
      // },
      grabCursor: true,
      // effect: "creative",
    // creativeEffect: {
    //   prev: {
    //     shadow: true,
    //     translate: ["-120%", 0, -500],
    //   },
    //   next: {
    //     shadow: true,
    //     translate: ["120%", 0, -500],
    //   },
    // },
      pagination: {
          el: ".swiper-pagination",
          clickable: true
      },
      navigation: {
          nextEl: ".swiper-nav-next",
          prevEl: ".swiper-nav-prev"
      },
  });

  
  //END HEADER JS //


  
  
  
  
  //counter js//
  function visible(partial) {
    var $t = partial,
        $w = jQuery(window),
        viewTop = $w.scrollTop(),
        viewBottom = viewTop + $w.height(),
        _top = $t.offset().top,
        _bottom = _top + $t.height(),
        compareTop = partial === true ? _bottom : _top,
        compareBottom = partial === true ? _top : _bottom;
  
    return ((compareBottom <= viewBottom) && (compareTop >= viewTop) && $t.is(':visible'));
  }
  
  $(window).scroll(function() {
    if (visible($('.count-digit'))) {
        if ($('.count-digit').hasClass('counter-loaded')) return;
        $('.count-digit').addClass('counter-loaded');
  
        $('.count-digit').each(function() {
            var $this = $(this);
            var count = $this.data('count'); // Get the actual count from data attribute
            var suffix = '';
  
            // Determine suffix
            if (count >= 1000) {
                count /= 1000;
                suffix = 'K';
            }
  
            jQuery({ Counter: 0 }).animate({ Counter: count }, {
                duration: 2000,
                easing: 'swing',
                step: function() {
                    $this.text(Math.ceil(this.Counter) + suffix + '+');
                }
            });
        });
    }
  });
  
  //end counter js//
  
  
  
  
  // new product js//
  $(".products-slider1").owlCarousel({
      loop: true,
      margin: 10,
      nav: true,
      dots: false,
      autoplay: true,
      autoplayTimeout: 6000,
      smartSpeed: 1000,
      responsive: {
          0: {
              items: 1
          },
          480: {
              items: 1
          },
          600: {
              items: 2
          },
          768: {
              items: 2
          },
          992: {
              items: 4
          },
          1200: {
              items: 4
          }
      }
  });
  //end //
});
// banner swiper slider//



// jQuery(document).ready(function() {
//   if (jQuery('.testimonial-slider-rtl').length) {
//     const reviewsCarouselOptions = {
//       slidesPerView: 4,
//       spaceBetween: 0,
//       loop: true,
//       speed: 7500,       
//       grabCursor: false,
//       pauseOnMouseEnter: false,
//       mousewheel: {
//         enabled: false,
//       },
//       keyboard: {
//         enabled: false,
//       },
//       navigation: {
//         nextEl: '.swiper-button-next',
//         prevEl: '.swiper-button-prev',
//       },
//       allowTouchMove: true,
//       autoHeight: false,
//       initialSlide: 0,
//       autoplay: {
//         delay: 0,
//         disableOnInteraction: true,
//       },
//       smartSpeed: 1000,
//     };
//     const reviewsCarousel = new Swiper(".testimonial-slider-rtl", reviewsCarouselOptions);
//   }
// });
jQuery(document).ready(function() {
    if (jQuery('.testimonial-slider-rtl').length) {
      const reviewsCarouselOptions = {
        slidesPerView: 4,
        spaceBetween: 0,
        loop: true,
        speed: 7500,       
        grabCursor: false,
        pauseOnMouseEnter: false,
        mousewheel: {
          enabled: false,
        },
        keyboard: {
          enabled: false,
        },
        navigation: {
          nextEl: '.swiper-button-next',
          prevEl: '.swiper-button-prev',
        },
        allowTouchMove: true,
        autoHeight: false,
        initialSlide: 0,
        autoplay: {
          delay: 0,
          disableOnInteraction: true,
        },
        smartSpeed: 1000,
        breakpoints: {
          1200: {
            slidesPerView: 4,
            spaceBetween: 0,
          },
          991: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          767: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          664: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          576: {
            slidesPerView: 2,
            spaceBetween: 10,
          },
          480: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          375: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
          320: {
            slidesPerView: 1,
            spaceBetween: 10,
          },
        }
      };
      const reviewsCarousel = new Swiper(".testimonial-slider-rtl", reviewsCarouselOptions);
    }
  });
  




// var swiper2 = new Swiper(".logo-row-one", {
//   spaceBetween: 10,
//   slidesPerView: 6,
//   //centeredSlides: true,
//   loop: true,
//   autoplay: {
//     delay: 0,
//     disableOnInteraction: false,
//   },
//   speed: 2000,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },

// });


// $('.swiper-slide').hover(function () {
//   swiper2.autoplay.stop();
// }, function () {
//   swiper2.autoplay.start();
// });

// var swiper3 = new Swiper(".logo-row-two", {
//   spaceBetween: 10,
//   slidesPerView: 6,
//   //centeredSlides: true,
//   loop: true,
//   autoplay: {
//     delay: 0,
//     disableOnInteraction: false,
//     reverseDirection: true,
//   },
//   speed: 2000,
//   pagination: {
//     el: ".swiper-pagination",
//     clickable: true,
//   },
//   navigation: {
//     nextEl: ".swiper-button-next",
//     prevEl: ".swiper-button-prev",
//   },

// });


var swiper2 = new Swiper(".logo-row-one", {
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
  },
  speed: 2000,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 6, // Default
  breakpoints: {
    1200: {
      slidesPerView: 6,
    },
    992: {
      slidesPerView: 6,
    },
    768: {
      slidesPerView: 5,
    },
    576: {
      slidesPerView: 3,
    },
    480: {
      slidesPerView: 3,
    },
    375: {
      slidesPerView: 3,
    },
    // 320: {
    //   slidesPerView: 2,
    // },
    0: {
      slidesPerView: 2,
    },
  },
});

$('.swiper-slide').hover(function () {
  swiper2.autoplay.stop();
}, function () {
  swiper2.autoplay.start();
});

var swiper3 = new Swiper(".logo-row-two", {
  spaceBetween: 10,
  loop: true,
  autoplay: {
    delay: 0,
    disableOnInteraction: false,
    reverseDirection: true,
  },
  speed: 2000,
  pagination: {
    el: ".swiper-pagination",
    clickable: true,
  },
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
  },
  slidesPerView: 6, // Default
  breakpoints: {
    1200: {
      slidesPerView: 6,
    },
    992: {
      slidesPerView: 6,
    },
    768: {
      slidesPerView: 5,
    },
    576: {
      slidesPerView: 3,
    },
    480: {
      slidesPerView: 3,
    },
    375: {
      slidesPerView: 3,
    },
    0: {
      slidesPerView: 2,
    },
  },
});


$('.swiper-slide').hover(function () {
  swiper3.autoplay.stop();
}, function () {
  swiper3.autoplay.start();
});

  
document.addEventListener('DOMContentLoaded', function() {
  const nav = document.getElementById('main-nav');
  const currentPage = nav.getAttribute('data-page');

  // Check if the current page is index.php
  if (currentPage === 'thankyou.php') {
      document.getElementById('index-nav').classList.add('active');
  }
});







// modal open time function
setTimeout(function () {
  const pageInfo = document.getElementById('page-thank-you');
  const isThankYouPage = pageInfo.getAttribute('data-thank-you') === 'true';
  if (!isThankYouPage) {
      $('#exampleModalCenter').modal('show');
  }
}, 40000);
