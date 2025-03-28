jQuery(document).ready(function ($) {
    isMobile = $(window).width() >= 480;
    console.log(isMobile);
    if (isMobile) {
        var heights = jQuery(".col-eq-height").map(function () {
            return jQuery(this).height();
        }).get(),
                maxHeight = Math.max.apply(null, heights);
        jQuery(".col-eq-height").height(maxHeight);
    }

    var $window = jQuery(window),
            $backtop = jQuery('.back-top');

    $window.scroll(function () {
        if ($window.scrollTop() > 200 && window.innerWidth < 768) {
            $backtop.addClass('active');
        } else {
            $backtop.removeClass('active');
        }
    });

    $backtop.click(function () {
        jQuery("html, body").animate({"scrollTop": 0}, 400);
    });
    
    $('.chaordic-container .chaordic-container-row').owlCarousel({
        items: 3,
        slideBy: 3,
        nav: false,
        dots: true,
        autoplay: true,
        responsive: {
            0: {
                items: 1,
                slideBy: 1
            },
            575: {
                items: 2,
                slideBy: 2
            },
            768: {
                items: 3,
                slideBy: 3
            }
        }
    });
});


jQuery(document).ready(function($) {
    if ($(window).width() < 768) {
        $('#topo .row > div:not(.display-desktop-on)').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 1,
            adaptiveHeight: true
        });
    }
});

jQuery(document).ready(function($) {
    if ($(window).width() < 768) {
        $('#destaque .row.box-destaque').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            adaptiveHeight: true
        });
    }
});

jQuery(document).ready(function($) {
    if ($(window).width() < 768) {
        $('#post-explorer .row.box-posts-post-itens').slick({
            dots: true,
            infinite: true,
            speed: 300,
            slidesToShow: 2,
            adaptiveHeight: true
        });
    }
});
