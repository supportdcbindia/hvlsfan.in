// Register ScrollTrigger plugin with GSAP
gsap.registerPlugin(ScrollTrigger);
(function ($) {
  window.onload = function () {
    let isDesktop = window.matchMedia("(min-width: 1200px)").matches;
    if (isDesktop) {
      // Left to right function for .textanim-left elements
      if ($(".hm-widerange-top").length > 0) {
        const textElemntMove = gsap.utils.toArray(".textanim-left");
        textElemntMove.forEach((tagetMove, i) => {
          const paraImage = gsap.timeline({
            scrollTrigger: {
              id: "stickyShape",
              trigger: ".hm-widerange-top",
              scrub: 1,
              start: "30% 80%",
              end: "70% 30%",
              markers: false,
            },
          });
          paraImage.add([
            TweenMax.fromTo(
              tagetMove,
              { xPercent: i % 2 ? 48 : -48 },
              { xPercent: 0 }
            ),
          ]);
        });
      }
      // Shape round to full screen animation
      if ($(".fixedsectionimg").length > 0) {
        const shapeWidth = gsap.timeline({
          scrollTrigger: {
            id: "stickyShape",
            trigger: ".fixedsectionimg",
            scrub: 2,
            start: "50% 50%",
            end: "100% 200px",
            markers: false,
          },
        });
        shapeWidth.add([
          TweenMax.to(".stickyshapecontent", {
            clipPath: "circle(100% at 50% 50%)",
            ease: "power1.inOut",
          }),
          //TweenMax.fromTo(".imgvideocol", { opacity: 1 }, { opacity: 0.5 }),
        ]);

        shapeWidth.add([
          TweenMax.fromTo(
            ".hm-widerange-content-left",
            { opacity: 0, y: -50 },
            { opacity: 1, y: 0 }
          ),
          //TweenMax.fromTo(".hm-widerange-content-right", { opacity: 0, y: 50 }, { opacity: 1, y: 0 }),
        ]);
      }
      /*Blog Image ANimation start */
      /*if ($(".fixedBlogimg").length) {
                const shapeWidth = gsap.timeline({
                    scrollTrigger: {
                        id: "FixedBlogImage",
                        trigger: ".fixedBlogimg",
                        scrub: 0.5,
                        start: "top top",
                        end: "100% 200px",
                        markers: false,
                    }
                });
                shapeWidth.add([
                    TweenMax.fromTo(".stickyBlogimgwrap", { width: '78vw', height: '90vh',}, { width: '100vw', height: '100vh' }),
                ]);
            }*/
      /*Blog Image ANimation End */
      if ($(".pdv-textanimation-wrap").length > 0) {
        const textElemntMove = gsap.utils.toArray(".textanim-left");
        textElemntMove.forEach((tagetMove, i) => {
          const paraImage = gsap.timeline({
            scrollTrigger: {
              id: "stickyShape",
              trigger: ".pdv-textanimation-wrap",
              scrub: 1,
              start: "30% 80%",
              end: "70% 30%",
              markers: false,
            },
          });
          paraImage.add([
            TweenMax.fromTo(
              tagetMove,
              { xPercent: i % 2 ? 48 : -48 },
              { xPercent: 0 }
            ),
          ]);
        });
      }

      /* Sticy css Horizontal scroll section strt */
      const sectionRow = document.querySelectorAll(".stickyHorizontalrow");
      if (sectionRow) {
        document.querySelectorAll(".stickyHorizontalrow").forEach((sec, i) => {
          const pinWrap = sec.querySelector(".horizontawrapper");
          let pinWrapWidth, horizontalScrollLength;
          function refresh() {
            pinWrapWidth = pinWrap.scrollWidth;
            horizontalScrollLength = pinWrapWidth - window.innerWidth;
          }
          refresh();
          gsap.to(pinWrap, {
            scrollTrigger: {
              id: "HorizontalSticky",
              scrub: 1,
              trigger: pinWrap,
              markers: false,
              start: "0% 20%",
              end: "+=120%", // Extend the scroll trigger to cover the full section
              invalidateOnRefresh: true,
            },
            x: -horizontalScrollLength, // Set x to -horizontalScrollLength
            //xPercent: -20, // Set xPercent
            ease: "none",
          });
          ScrollTrigger.addEventListener("refreshInit", refresh);
        });
      }
      /* Sticy css Horizontal scroll section end */
    }
  };
})(jQuery);
// DOMContentLoaded Start
(function ($) {
  $(".memberopen").on("click", function (e) {
    e.preventDefault();
    setTimeout(function () {
      $(".MembersModal ").addClass("slide");
    }, 300);
    $("body").addClass("OpenMembers");
    $(".black-overlay-member").fadeIn(300);
    e.stopPropagation();
  });
  $(".careersclose").on("click", function (e) {
    e.preventDefault();
    $(".MembersModal").removeClass("slide");
    $("body").removeClass("OpenMembers");
    $(".black-overlay-member").fadeOut(300);
  });
  $(document).on("click", ".MembersModal", function (e) {
    e.stopPropagation();
  });
  $(document).click(function () {
    $(".MembersModal").removeClass("slide");
    $("body").removeClass("OpenMembers");
    $(".black-overlay-member").fadeOut(300);
  });

  document.addEventListener("DOMContentLoaded", (event) => {
    let isDesktop = window.matchMedia("(min-width: 1200px)").matches;
    /*if ($(window).width() > 1200 && $(".csi-wrap").length > 0) {
            //  if ($(".fixedsectionimg").length) {
            const blogfixedimg = gsap.timeline({
                scrollTrigger: {
                    id: "stickyShape",
                    trigger: ".csi-wrap",
                    scrub: 2,
                    start: "top top",
                    end: "100% 200px",
                    markers: false,
                }
            });

            blogfixedimg.add([
                TweenMax.fromTo(".csi-img", { width: '80vw', height: '80vh',}, { width: '100vw', height: '100vh' }),
            ]);
        }*/
    if (isDesktop) {
      // Animation for videocaptionleft (left to right)
      if ($(".videocaptionleft").length > 0) {
        gsap.fromTo(
          ".videocaptionleft",
          { x: "-100%", opacity: 0 },
          { x: "0%", opacity: 1, duration: 1, ease: "power2.out" }
        );
      }

      // Animation for videocaptionright (right to left)
      if ($(".videocaptionright").length > 0) {
        gsap.fromTo(
          ".videocaptionright",
          { x: "100%", opacity: 0 },
          { x: "0%", opacity: 1, duration: 1, ease: "power2.out", delay: 0.3 }
        );
      }

      if ($(".loadleft").length) {
        let loadleft = gsap.timeline({ duration: 0.3, ease: "power1.out" });
        loadleft.from(".loadleft", { opacity: 0, x: -50 }, "someLabel");
      }
      if ($(".loadright").length) {
        let loadright = gsap.timeline({ duration: 0.3, ease: "power1.out" });
        loadright.from(".loadright", { opacity: 0, x: 50 }, "someLabel");
      }
      if ($(".loadup").length) {
        let loadup = gsap.timeline({ duration: 0.3, ease: "power1.out" });
        loadup.from(".loadup", { opacity: 0, y: 50 }, "someLabel");
      }
      /* animation on top// Left to right function for .textanim-left elements
            if ($(".hm-widerange-top").length > 0) {
                const textElemntMove = gsap.utils.toArray('.textanim-left');
                textElemntMove.forEach((tagetMove, i) => {
                    const paraImage = gsap.timeline({
                        scrollTrigger: {
                            id: "stickyShape",
                            trigger: '.hm-widerange-top',
                            scrub: 1,
                            start: "30% 80%",
                            end: "70% 30%",
                            markers: false,
                        }
                    });

                    paraImage.add([
                        TweenMax.fromTo(tagetMove,
                            { xPercent: i % 2 ? 48 : -48 },
                            { xPercent: 0 })
                    ]);
                });
            }

            // Shape round to full screen animation
            if ($(".fixedsectionimg").length > 0) {
                const shapeWidth = gsap.timeline({
                    scrollTrigger: {
                        id: "stickyShape",
                        trigger: ".fixedsectionimg",
                        scrub: 2,
                        start: "50% 50%",
                        end: "100% 200px",
                        markers: false,
                    }
                });

                shapeWidth.add([
                    TweenMax.to(".stickyshapecontent", {
                        clipPath: 'circle(100% at 50% 50%)',
                        ease: "power1.inOut"
                    }),
                    TweenMax.fromTo(".imgvideocol", { opacity: 1 }, { opacity: 0.5 }),
                ]);

                shapeWidth.add([
                    TweenMax.fromTo(".hm-widerange-content-left", { opacity: 0, y: -50 }, { opacity: 1, y: 0 }),
                    TweenMax.fromTo(".hm-widerange-content-right", { opacity: 0, y: 50 }, { opacity: 1, y: 0 }),
                ]);
            } on top animation*/

      // One by one display function
      if ($(".hm-accurate-wrap").length > 0) {
        const shapeWidth = gsap.timeline({
          scrollTrigger: {
            id: "stickyShape",
            trigger: ".hm-accurate-wrap",
            scrub: 2,
            start: "50% 80%",
            end: "100% 50%",
            markers: false,
          },
        });
        shapeWidth.add([
          TweenMax.fromTo(
            ".hm-accurate-center",
            { yPercent: 100 },
            { yPercent: 0 }
          ),
        ]);
        shapeWidth.add([
          TweenMax.fromTo(
            ".hm-accurate-left",
            { opacity: 0, yPercent: 100 },
            { opacity: 1, yPercent: 0 }
          ),
        ]);
        shapeWidth.add([
          TweenMax.fromTo(
            ".hm-accurate-right",
            { opacity: 0, yPercent: 100 },
            { opacity: 1, yPercent: 0 }
          ),
        ]);
        shapeWidth.add([
          TweenMax.fromTo(
            ".hm-accurate-left-two",
            { opacity: 0, yPercent: 100 },
            { opacity: 1, yPercent: 0 }
          ),
        ]);
        shapeWidth.add([
          TweenMax.fromTo(
            ".hm-accurate-right-two",
            { opacity: 0, yPercent: 100 },
            { opacity: 1, yPercent: 0 }
          ),
        ]);
      }
      // Fade-in right function
      if ($(".fadeRight").length > 0) {
        const vectorObject = gsap.utils.toArray(".fadeRight");
        vectorObject.forEach((fadeRight) => {
          const paraImage = gsap.timeline({
            scrollTrigger: {
              id: "fadeRightAnimation",
              trigger: fadeRight,
              scrub: 2,
              start: "0% 90%",
              end: "30% 70%",
              markers: false,
            },
          });
          paraImage.from(fadeRight, { x: 50, alpha: 0 }, "<1");
        });
      }
      // Fade-in left function
      if ($(".fadeLeft").length > 0) {
        const vectorObject = gsap.utils.toArray(".fadeLeft");
        vectorObject.forEach((fadeLeft) => {
          const paraImage = gsap.timeline({
            scrollTrigger: {
              id: "FadeLeftAnimation",
              trigger: fadeLeft,
              scrub: 2,
              start: "0% 90%",
              end: "30% 70%",
              markers: false,
            },
          });
          paraImage.from(fadeLeft, { x: -50, alpha: 0 }, "<1");
        });
      }
      // Fade-down effect
      const contentDown = gsap.utils.toArray(".fadeDown");
      if (contentDown.length > 0) {
        contentDown.forEach((fadeDw) => {
          const contRight = gsap.timeline({
            scrollTrigger: {
              id: "DownEffect",
              trigger: fadeDw,
              scrub: 2,
              start: "0% 70%",
              end: "60% 60%",
              markers: false,
            },
          });
          contRight.add([
            TweenMax.fromTo(
              fadeDw,
              { opacity: 0, y: -100 },
              { opacity: 1, y: 0 }
            ),
          ]);
        });
      }
      // Fade-up effect
      const contentUp = gsap.utils.toArray(".fadeUp");
      if (contentUp.length > 0) {
        contentUp.forEach((fadeUp) => {
          const contRight = gsap.timeline({
            scrollTrigger: {
              id: "textUp",
              trigger: fadeUp,
              scrub: 2,
              start: "0% 80%",
              end: "20% 70%",
              markers: false,
            },
          });
          contRight.add([
            TweenMax.fromTo(
              fadeUp,
              { opacity: 0, y: 100 },
              { opacity: 1, y: 0 }
            ),
          ]);
        });
      }
    }
  });
})(jQuery);

// DOMContentLoaded End
(function ($) {
  setTimeout(function () {
    $("#pageloader").hide();
  }, 5000);
  jQuery(window).on("load", function () {
    $("#pageloader").hide();
  });
  jQuery(document).ready(function ($) {
    // ready funciton start
    /* menu function navigaion start*/
    $(".menu-toggle").on("click", function (e) {
      $(this).toggleClass("isOpen");
      $("body").toggleClass("isOpenmenu");
      $(".menubar").toggleClass("slide");
      e.stopPropagation();
    });
    $(".MenuClose").on("click", function (e) {
      $(this).removeClass("isOpen");
      $("body").removeClass("isOpenmenu");
      $(".menubar").removeClass("slide");
      e.stopPropagation();
    });
    $(
      '<span class="sub-menu-arrow"><i class="navarrow navardown"></i></span>'
    ).insertAfter(".navmenu > ul li.menu-item-has-children > a");
    $(".sub-menu-arrow").on("click", function (e) {
      e.preventDefault();
      // $(this).parent('li').find('a').toggleClass('subopen');
      $(this).siblings("ul").slideToggle();
      var $icon = $(this).parent("li").find("i");
      $icon.toggleClass("navardown  navarup");
      $(this).parent("li").siblings().find("ul").slideUp();
      // $(this).parent('li').siblings().find('a').removeClass('subopen');
      $(this)
        .parent("li")
        .siblings()
        .find("span i")
        .removeClass("navarup")
        .addClass("navardown");
      $(this)
        .parent("li")
        .children("ul")
        .children("li")
        .find("span i")
        .removeClass("navarup")
        .addClass("navardown");
      $(this)
        .parent("li")
        .parent("ul")
        .parent("li")
        .siblings()
        .children("ul")
        .children("li")
        .children("ul")
        .slideUp();
      $(this)
        .parent("li")
        .parent("ul")
        .parent("li")
        .siblings()
        .children("ul")
        .children("li")
        .children("a")
        .removeClass("subopen");
    });
    /* menu function navigaion End*/
    /* fixed sticky header	start */
    $(window).on("scroll", function () {
      if ($(window).scrollTop() >= 50) {
        $(".mainheader").addClass("sticky");
      } else {
        $(".mainheader").removeClass("sticky");
      }
    });

    window.addEventListener("scroll", function () {
      const header = document.querySelector(".mainheader");
      const footer = document.querySelector("footer"); // assumes your footer uses <footer>

      const footerTop = footer.getBoundingClientRect().top;
      const headerHeight = header.offsetHeight;

      if (footerTop <= headerHeight) {
        $(".mainheader").addClass("footerTouch");
      } else {
        $(".mainheader").removeClass("footerTouch");
      }
    });

    window.addEventListener("scroll", function () {
      const header = document.querySelector(".mainheader");
      const tabHeader = document.querySelector(".nav-tabs"); // assumes your footer uses <footer>

      const tabHeaderHeight = tabHeader.getBoundingClientRect().top;
      const headerHeight = header.offsetHeight;

      if (tabHeaderHeight <= headerHeight) {
        $(".mainheader").addClass("TabTouch");
      } else {
        $(".mainheader").removeClass("TabTouch");
      }
    });
    window.addEventListener("scroll", function () {
      const header = document.querySelector(".mainheader");
      const footer = document.querySelector("footer");
      const tabHeader = document.querySelector(".nav-tabs");

      const footerTop = footer.getBoundingClientRect().top;
      const tabHeaderTop = tabHeader.getBoundingClientRect().top;
      const headerHeight = header.offsetHeight;

      // Footer Touch Logic
      if (footerTop <= headerHeight) {
        header.classList.add("footerTouch");
        header.classList.remove("TabTouch"); // Remove TabTouch when footer touches
      } else {
        header.classList.remove("footerTouch");

        // Tab Touch Logic (only add if footer not touched)
        if (tabHeaderTop <= headerHeight) {
          header.classList.add("TabTouch");
        } else {
          header.classList.remove("TabTouch");
        }
      }
    });

    /* fixed sticky header	End */
    $(".logoslider-call").slick({
      dots: false,
      autoplay: true,
      arrows: true,
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplaySpeed: 1500,
      responsive: [
        {
          breakpoint: 1500,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 769,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 2,
          },
        },
      ],
    });
    /*slider start*/
    $(".relatedproduct-slider").slick({
      slidesToShow: 4,
      autoplay: true,
      slidesToScroll: 1,
      arrows: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            arrows: false,
            dots: true,
          },
        },
        {
          breakpoint: 580,
          settings: {
            slidesToShow: 1,
            arrows: false,
            dots: true,
          },
        },
      ],
    });
    $(".infa-divisions-slider").slick({
      slidesToShow: 2,
      autoplay: true,
      slidesToScroll: 1,
      arrows: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            dots: true,
            arrows: false,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 1,
            dots: true,
            arrows: false,
          },
        },
      ],
    });
    $(".newslider").slick({
      slidesToShow: 4,
      autoplay: true,
      slidesToScroll: 1,
      arrows: true,
      responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 3,
          },
        },
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            arrows: false,
            dots: true,
          },
        },
        {
          breakpoint: 580,
          settings: {
            slidesToShow: 1,
            arrows: false,
            dots: true,
          },
        },
      ],
    });
    if (window.outerWidth < 1200) {
      $(".horizontawrapper").slick({
        slidesToShow: 2,
        autoplay: true,
        slidesToScroll: 1,
        arrows: true,
        responsive: [
          {
            breakpoint: 580,
            settings: {
              slidesToShow: 1,
              arrows: false,
              dots: true,
            },
          },
        ],
      });
    }
    $(".slidersm").slick({
      slidesToShow: 1,
      autoplay: true,
      slidesToScroll: 1,
      arrows: true,
      asNavFor: ".sliderlg",
    });
    $(".sliderlg").slick({
      slidesToShow: 1,
      autoplay: true,
      slidesToScroll: 1,
      arrows: false,
      asNavFor: ".slidersm",
    });
    $(".infa-logoslider").slick({
      slidesToShow: 5,
      slidesToScroll: 1,
      autoplay: true,
      arrows: true,
      autoplaySpeed: 2000,
      responsive: [
        {
          breakpoint: 1400,
          settings: {
            slidesToShow: 4,
          },
        },
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 3,
            arrows: false,
            dots: true,
          },
        },
        {
          breakpoint: 767,
          settings: {
            slidesToShow: 2,
            dots: true,
            arrows: false,
          },
        },
      ],
    });
    /* Logo Clone fucntion start */
    //$('.proejctleftanim').clone().addClass('elementClone').insertAfter('.proejctleftanim');

    /* Logo Clone fucntion end */
    /* svg img converter to code function */
    $("img.custom-svg-icon").each(function () {
      var $img = $(this);
      var imgID = $img.attr("id");
      var imgClass = $img.attr("class");
      var imgURL = $img.attr("src");

      $.get(
        imgURL,
        function (data) {
          var $svg = $(data).find("svg");
          if (typeof imgID !== "undefined") {
            $svg = $svg.attr("id", imgID);
          }
          if (typeof imgClass !== "undefined") {
            $svg = $svg.attr("class", imgClass + " replaced-svg");
          }
          $svg = $svg.removeAttr("xmlns:a");
          if (
            !$svg.attr("viewBox") &&
            $svg.attr("height") &&
            $svg.attr("width")
          ) {
            $svg.attr(
              "viewBox",
              "0 0 " + $svg.attr("height") + " " + $svg.attr("width")
            );
          }
          $img.replaceWith($svg);
        },
        "xml"
      ); //Returns as XML
    });
    /* svg img converter to code function End */
    /* popup function start */

    $(".modalOpen").click(function (e) {
      e.preventDefault();
      e.stopPropagation();
      $(".modalProduct").hide();
      if ($(this).hasClass("inquireNowBtn")) {
        $(".inquireNowPopup").fadeIn(500);
      } else if ($(this).hasClass("BrochureBtn")) {
        $(".brochurePopup").fadeIn(500);
      } else if ($(this).hasClass("headerInquireNowPopup")) {
        $(".headerPopup").fadeIn(500);
      }
    });
    $(".modalClose, .closebtn").click(function (e) {
      e.preventDefault();
      $(".modalProduct").fadeOut(500);
    });
    $(document).click(function () {
      $(".modalProduct").fadeOut(500);
    });
    $(".modalInner").click(function (e) {
      e.stopPropagation();
    });

    $("a.inquireNowBtn").click(function (event) {
      $("input[name=product_name]").val($(this).attr("product-name"));
    });

    /* table wrapper div fucntion start */
    $(".tblwrapdiv table").wrap('<div class="table-responsive"></div>');
    $(".tblwrapdiv table").addClass("table table-bordered");
    /* table wrapper div fucntion end */

    /* accordian tab function start */
    $("#tabs-nav li:first-child").addClass("active");
    $(".tabsContent:first").show();

    // Click function
    $("#tabs-nav li a").click(function (e) {
      e.preventDefault();
      $("#tabs-nav li").toggleClass("active");
      $(this).parent().siblings().removeClass("active");
      $(".tabsContent").hide();
      var activeTab = $(this).attr("href");
      $(activeTab).fadeIn();

      $(this).siblings(".contentshow").slideToggle();
      $(this).parent("li").siblings().find(".contentshow").slideUp();
      return false;
    });
    /* accordian tab function end */

    /*hover tab fucntion start*/

    if (window.outerWidth > 1200) {
      $(".texthovercol").hover(function (e) {
        e.preventDefault();
        var dataId = $(this).data("id");
        $(this)
          .addClass("hoverselected")
          .siblings()
          .removeClass("hoverselected");
        $(this)
          .parents(".hovertabelement")
          .find(".tabfullimgrow")
          .children("." + dataId)
          .addClass("hoverselected")
          .siblings()
          .removeClass("hoverselected");
      });
    } else {
      $(".texthovercol").click(function (e) {
        e.preventDefault();
        console.log("done");
        var dataId = $(this).data("id");
        $(this)
          .addClass("hoverselected")
          .siblings()
          .removeClass("hoverselected");
        $(this)
          .parents(".hovertabelement")
          .find(".tabfullimgrow")
          .children("." + dataId)
          .addClass("hoverselected")
          .siblings()
          .removeClass("hoverselected");
      });
    }
    /*hover tab fucntion end*/

    $.fn.isInViewport = function () {
      var elementTop = $(this).offset().top;
      var elementBottom = elementTop + $(this).outerHeight();
      var viewportTop = $(window).scrollTop();
      var viewportBottom = viewportTop + $(window).height();
      return elementBottom > viewportTop && elementTop < viewportBottom;
    };
    $(window).on(" scroll", function () {
      if ($(".countercolrow").length) {
        if ($(".countercolrow").isInViewport()) {
          $(".counting").each(function () {
            var $this = $(this),
              countTo = $this.attr("data-count");

            $({ countNum: $this.text() }).animate(
              {
                countNum: countTo,
              },
              {
                duration: 500,
                easing: "linear",
                step: function () {
                  $this.text(Math.floor(this.countNum));
                },
                complete: function () {
                  $this.text(this.countNum);
                  // alert('finished');
                },
              }
            );
          });
        }
      }
      /* fancybox gallery function start */
      Fancybox.bind('[data-fancybox="images"]', {
        Thumbs: false,
        Carousel: {
          transition: "slide",
        },
        Toolbar: {
          display: {
            left: [],
            right: ["close"],
          },
        },
      });
      /* fancybox gallery function end */
    });
  }); // ready funciton end
})(jQuery);
