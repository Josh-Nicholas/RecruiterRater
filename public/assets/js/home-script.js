$('.login #username').attr('placeholder', 'Email *'); // Change placeholder text
$('#contact.account input[name="uwp_account_submit"]').val('Save'); // Change button text
var img = jQuery('.header-profile-picture a img').clone();
jQuery('#menu-item-dropdown-80').html(img);
jQuery('#menu-item-dropdown-80').append(jQuery('.header-name'));

// Sponsors/Clients logo slider

$(document).ready(function() {

    if ($('.brands_slider').length) {
        var brandsSlider = $('.brands_slider');

        brandsSlider.owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: false,
            dots: false,
            autoWidth: true,
            items: 8,
            margin: 42
        });

        if ($('.brands_prev').length) {
            var prev = $('.brands_prev');
            prev.on('click', function() {
                brandsSlider.trigger('prev.owl.carousel');
            });
        }

        if ($('.brands_next').length) {
            var next = $('.brands_next');
            next.on('click', function() {
                brandsSlider.trigger('next.owl.carousel');
            });
        }
    }
    if ($('.browse-carousel').length) {
        var browseSlider = $('.browse-carousel');

        browseSlider.owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: false,
            dots: false,
            items: 6,
            autoWidth: true,
            margin: 45,
            responsive: {
                0: {
                    items: 2,
                    autoWidth: false
                },
                576: {
                    items: 2
                }
            }
        });
    }
    if ($('.browse_prev').length) {
        var prev = $('.browse_prev');
        prev.on('click', function() {
            browseSlider.trigger('prev.owl.carousel');
        });
    }

    if ($('.browse_next').length) {
        var next = $('.browse_next');
        next.on('click', function() {
            browseSlider.trigger('next.owl.carousel');
        });
    }

    if ($('.review-carousel').length) {
        var reviewSlider = $('.review-carousel');

        reviewSlider.owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 5000,
            nav: false,
            dots: false,
            autoWidth: true,
            items: 6,
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false,
                    margin: 20
                },
                576: {
                    items: 1
                }
            }
        });
    }
    if ($('.review-carousel2').length) {
        var review2Slider = $('.review-carousel2');

        review2Slider.owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            nav: false,
            dots: false,
            autoWidth: true,
            items: 6,
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false,
                    margin: 20
                },
                576: {
                    items: 1
                }
            }
        });
    }
    if ($('.partners_slider').length) {
        var partnersSlider = $('.partners_slider');

        partnersSlider.owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 4000,
            nav: false,
            dots: false,
            autoWidth: true,
            items: 3,
            margin: 50,
            responsive: {
                0: {
                    items: 1,
                    autoWidth: false
                },
                576: {
                    items: 1
                }
            }
        });
    }
    if ($('.partner_prev').length) {
        var prev = $('.partner_prev');
        prev.on('click', function() {
            partnersSlider.trigger('prev.owl.carousel');
        });
    }

    if ($('.partner_next').length) {
        var next = $('.partner_next');
        next.on('click', function() {
            partnersSlider.trigger('next.owl.carousel');
        });
    }

    if ($('#trusted .owl-carousel').length) {
        var trustedSlider = $('#trusted .owl-carousel');
        trustedSlider.owlCarousel({
            mouseDrag: false,
            loop: true,
            margin: 56,
            dots: false,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 1
                },
                1000: {
                    items: 2
                }
            }
        });
    }

    if ($('.trusted_prev').length) {
        var prev = $('.trusted_prev');
        prev.on('click', function() {
            trustedSlider.trigger('prev.owl.carousel');
        });
    }

    if ($('.trusted_next').length) {
        var next = $('.trusted_next');
        next.on('click', function() {
            trustedSlider.trigger('next.owl.carousel');
        });
    }

    $('.trusted_prev').click(function() {
        $active = $('.owl-item .item-review-custom.show');
        $('.owl-item .item-review-custom.show').removeClass('show');
        $('.owl-item .item-review-custom').removeClass('next-review-custom');
        $('.owl-item .item-review-custom').removeClass('prev-review-custom');
        $active.addClass('next-review-custom');
        if ($active.is('.first')) {
            $('.owl-item .last').addClass('show');
            $('.first').addClass('next-review-custom');
            $('.owl-item .last').parent().prev().children('.item-review-custom').addClass('prev-review-custom');
        } else {
            $active.parent().prev().children('.item-review-custom').addClass('show');
            if ($active.parent().prev().children('.item-review-custom').is('.first')) {
                $('.owl-item .last').addClass('prev-review-custom');
            } else {
                $('.owl-item .show').parent().prev().children('.item-review-custom').addClass('prev-review-custom');
            }
        }
    });

    $('.trusted_next').click(function() {
        $active = $('.owl-item .item-review-custom.show');
        $('.owl-item .item-review-custom.show').removeClass('show');
        $('.owl-item .item-review-custom').removeClass('next-review-custom');
        $('.owl-item .item-review-custom').removeClass('prev-review-custom');
        $active.addClass('prev-review-custom');
        if ($active.is('.last')) {
            $('.owl-item .first').addClass('show');
        } else {
            $active.parent().next().children('.item-review-custom').addClass('show');
            if ($active.parent().next().children('.item-review-custom').is('.last')) {
                $('.owl-item .first').addClass('next-review-custom');
            } else {
                $('.owl-item .show').parent().next().children('.item-review-custom').addClass('next-review-custom');
            }
        }
    });
});

jQuery(document).ready(function() {

    var activeForm = document.getElementById("signup-tab-btn");
    var disabledForm = document.getElementById("login-tab-btn");
    var changeImg = document.getElementById("register-page-left");
    var firstRegisterH = document.getElementById("register-first-h");
    var secondRegisterH = document.getElementById("register-second-h");

    $(activeForm).click(function(e) {
        e.preventDefault();
        $(changeImg).addClass("different-image-box");
        $(secondRegisterH).css("visibility", "visible");
        $(firstRegisterH).css("visibility", "hidden");
    });

    $(disabledForm).click(function(event) {
        event.preventDefault();
        $(changeImg).removeClass("different-image-box");
        $(secondRegisterH).css("visibility", "hidden");
        $(firstRegisterH).css("visibility", "visible");
    });
});

function openLink(evt, animName) {
    var i, x, tablinks;
    x = document.getElementsByClassName("inside-tabs");
    for (i = 0; i < x.length; i++) {
        x[i].style.display = "none";
    }
    tablinks = document.getElementsByClassName("tablink-custom");
    for (i = 0; i < x.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" w3-blue", "");
    }
    document.getElementById(animName).style.display = "block";
    evt.currentTarget.className += " w3-blue";
};

$(document).ready(function() {
    $("#myAccount a:first").tab('show'); // show last tab on page load
});