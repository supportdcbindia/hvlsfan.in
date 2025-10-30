<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://marutair.com/lp/assest/js/swiper-bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@fancyapps/ui/dist/fancybox.umd.js"></script>

<!-- <script src="../assets/js/jquery.validate.min.js"></script>
<script src="../assets/js/index.js"></script>
<script src="../assets/js/form-buzz.js"></script> -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script>
    Fancybox.bind("[data-fancybox]", {
        // Optional settings here
    });
</script>

<script>
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
</script>

<script>
    var swiper2 = new Swiper(".logo-row-one", {
        spaceBetween: 25,
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
        slidesPerView: 8, // Default
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

    $('.swiper-slide').hover(function() {
        swiper2.autoplay.stop();
    }, function() {
        swiper2.autoplay.start();
    });

    var swiper3 = new Swiper(".logo-row-two", {
        spaceBetween: 25,
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


    $('.swiper-slide').hover(function() {
        swiper3.autoplay.stop();
    }, function() {
        swiper3.autoplay.start();
    });
</script>

<script>
    jQuery(window).scroll(function() {
        var screenTop = jQuery(document).scrollTop();
        if (screenTop > 0) {
            jQuery('.CustomHeader').addClass('new-sticky');
            // jQuery('body').addClass('sticky');
        } else {
            jQuery('.CustomHeader').removeClass('new-sticky');
            // jQuery('body').removeClass('sticky');
        }

    });
</script>
</body>


</html>