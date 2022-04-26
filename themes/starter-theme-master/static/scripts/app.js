(function ($) {
    'use strict';
    var isTouchDevice = 'ontouchstart' in document.documentElement;
    if (isTouchDevice) {
        $('html').removeClass('no-touch');
    }

    window.lazyLoadInstance = new LazyLoad({
        elements_selector: ".js-lazy"
    });

    $(document).on("click", ".js-modal", function (e) {
        e.preventDefault();
        $(".js-overlay").addClass("is-show-modal");
        $(".js-modal-window").addClass("show-modal");
        var typeOfModal = $(this).attr("data-modal");
        $(".modal-" + typeOfModal).addClass("show-modal");
        $("html").addClass("modal-is-active");
    });

    var js_slick_carousel = $('.js-main-banner-slick').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 4000
    });

    js_slick_carousel.on('afterChange', function (slick, currentSlide) {
        $(currentSlide.$slides).each(function () {
            lazyLoadInstance.update();
        });
    });

    if ($(".js-top-overlay").length > 0) {
        $(".js-top-overlay").prev('.bs-block').addClass("bottom-overlay-section");
    }

    $(document).on("click", ".js-overlay, .modal-window .js-close-modal", function (e) {
        e.preventDefault();
        $(".js-overlay").removeClass("is-show-modal");
        $(".modal-window").removeClass("show-modal");
        $("html").removeClass("modal-is-active");
    });

    if (window.matchMedia("(max-width: 47.938em)").matches) {
        $("html").addClass("bpXs");

        $(document).on("click touchstart", ".js-overlay, .js-close", function (e) {
            $('.navbar-responsive-menu').removeClass("menu-is-active");
            $("html").removeClass("responsive-menu-is-show");
            e.preventDefault();
        });

        $(".js-navbar-toggle").click(function (e) {
            e.preventDefault();
            if ($(".navbar-responsive-menu").hasClass("menu-is-active")) {
                $("html").removeClass("responsive-menu-is-show");
                $('.navbar-responsive-menu').removeClass("menu-is-active");
            } else {
                $("html").addClass("responsive-menu-is-show");
                $('.navbar-responsive-menu').addClass("menu-is-active");
            }
        });
    };

    $('a[href*="#"]').not('[href="#"]').not('[href="#0"]').click(function (event) {
        // On-page links
        if (
            location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') &&
            location.hostname == this.hostname
        ) {
            // Figure out element to scroll to
            var target = $(this.hash);
            target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
            // Does a scroll target exist?
            if (target.length) {
                // Only prevent default if animation is actually gonna happen
                event.preventDefault();
                $('html, body').animate({
                    scrollTop: target.offset().top - 85
                }, 1000, function () {
                    // Callback after animation
                    // Must change focus!
                    var $target = $(target);
                    $target.focus();
                    if ($target.is(":focus")) { // Checking if the target was focused
                        return false;
                    } else {
                        $target.attr('tabindex', '-1'); // Adding tabindex for elements not focusable
                        $target.focus(); // Set focus again
                    };
                });
            }
        }
    });

    $(window).on('load', function () {
        if (navigator.userAgent.match(/(iPod|iPhone|iPad)/)) {
            $("html").addClass("iOS");
        }
    });

})(jQuery);