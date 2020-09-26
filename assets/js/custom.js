$(document).ready(function () {
  "use strict";

  var header = $(".header");

  setHeader();

  $(window).on("resize", function () {
    setHeader();

    setTimeout(function () {
      $(window).trigger("resize.px.parallax");
    }, 375);
  });

  $(document).on("scroll", function () {
    setHeader();
  });

  initMenu();
  initHomeSlider();
  initDatePicker();
  initSvg();
  initGallery();
  initTestSlider();
  initBookingSlider();
  initBlogSlider();

  function setHeader() {
    if ($(window).scrollTop() > 91) {
      header.addClass("scrolled");
    } else {
      header.removeClass("scrolled");
    }
  }

  function initMenu() {
    if ($(".menu").length) {
      var menu = $(".menu");
      var hamburger = $(".hamburger");
      var close = $(".menu_close");

      hamburger.on("click", function () {
        menu.toggleClass("active");
      });

      close.on("click", function () {
        menu.toggleClass("active");
      });
    }
  }

  function initHomeSlider() {
    if ($(".home_slider").length) {
      var homeSlider = $(".home_slider");
      homeSlider.owlCarousel({
        items: 1,
        autoplay: true,
        loop: true,
        nav: false,
        smartSpeed: 1200,
      });

      if ($(".home_slider_custom_dot").length) {
        $(".home_slider_custom_dot").on("click", function () {
          $(".home_slider_custom_dot").removeClass("active");
          $(this).addClass("active");
          homeSlider.trigger("to.owl.carousel", [$(this).index(), 1200]);
        });
      }

      homeSlider.on("changed.owl.carousel", function (event) {
        $(".home_slider_custom_dot").removeClass("active");
        $(".home_slider_custom_dots li")
          .eq(event.page.index)
          .addClass("active");
      });
    }
  }

  function initDatePicker() {
    if ($(".datepicker").length) {
      var datePickers = $(".datepicker");
      datePickers.each(function () {
        var dp = $(this);
        // Uncomment to use date as a placeholder
        // var date = new Date();
        // var dateM = date.getMonth() + 1;
        // var dateD = date.getDate();
        // var dateY = date.getFullYear();
        // var dateFinal = dateM + '/' + dateD + '/' + dateY;
        var placeholder = dp.data("placeholder");
        dp.val(placeholder);
        dp.datepicker();
      });
    }
  }

  function initSvg() {
    if ($("img.svg").length) {
      jQuery("img.svg").each(function () {
        var $img = jQuery(this);
        var imgID = $img.attr("id");
        var imgClass = $img.attr("class");
        var imgURL = $img.attr("src");

        jQuery.get(
          imgURL,
          function (data) {
            var $svg = jQuery(data).find("svg");

            if (typeof imgID !== "undefined") {
              $svg = $svg.attr("id", imgID);
            }

            if (typeof imgClass !== "undefined") {
              $svg = $svg.attr("class", imgClass + " replaced-svg");
            }

            $svg = $svg.removeAttr("xmlns:a");

            $img.replaceWith($svg);
          },
          "xml"
        );
      });
    }
  }

  function initGallery() {
    if ($(".gallery_slider").length) {
      var gallerySlider = $(".gallery_slider");
      gallerySlider.owlCarousel({
        items: 4,
        loop: false,
        autoplay: false,
        dots: false,
        nav: false,
        smartSpeed: 1200,
        responsive: {
          0: { items: 1 },
          576: { items: 2 },
          768: { items: 3 },
          992: { items: 4 },
        },
      });

      if ($(".colorbox").length) {
        $(".colorbox").colorbox({
          rel: "colorbox",
          photo: true,
          maxWidth: "95%",
          maxHeight: "95%",
        });
      }
    }
  }

  function initTestSlider() {
    if ($(".test_slider").length) {
      var testSlider = $(".test_slider");
      testSlider.owlCarousel({
        items: 3,
        autoplay: true,
        loop: true,
        smartSpeed: 1200,
        dots: false,
        nav: false,
        margin: 30,
        autoplayHoverPause: true,
        responsive: {
          0: { items: 1 },
          768: { items: 2 },
          992: { items: 3 },
        },
      });
    }
  }

  function initBookingSlider() {
    if ($(".booking_slider").length) {
      var bookingSlider = $(".booking_slider");
      bookingSlider.owlCarousel({
        items: 3,
        autoplay: true,
        autoplayHoverPause: true,
        loop: true,
        smartSpeed: 1200,
        dots: false,
        nav: false,
        margin: 30,
        responsive: {
          0: { items: 1 },
          768: { items: 2 },
          992: { items: 3 },
        },
      });
    }
  }

  function initBlogSlider() {
    if ($(".blog_slider").length) {
      var blogSlider = $(".blog_slider");
      blogSlider.owlCarousel({
        items: 3,
        autoplay: true,
        loop: true,
        smartSpeed: 1200,
        dots: false,
        nav: false,
        margin: 2,
        responsive: {
          0: { items: 1 },
          768: { items: 2 },
          992: { items: 3 },
        },
      });
    }
  }
});
