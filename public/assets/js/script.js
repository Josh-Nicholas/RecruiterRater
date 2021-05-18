$(document).ready(function() {
    $("#myAccount a:first").tab('show'); // show last tab on page load
    $("#browseCategory a:first").tab('show');
});

$(':radio').change(function() {
    console.log('New star rating: ' + this.value);
});

/*
    Carousel
*/
$(document).ready(function() {

    if ($('.review_slider').length) {
        var reviewSlider = $('.review_slider');

        reviewSlider.owlCarousel({
            loop: true,
            autoplay: false,
            autoplayTimeout: 5000,
            nav: false,
            dots: false,
            autoWidth: true,
            items: 8,
            margin: 42
        });

        if ($('.review_prev').length) {
            var prev = $('.review_prev');
            prev.on('click', function() {
                reviewSlider.trigger('prev.owl.carousel');
            });
        }

        if ($('.review_next').length) {
            var next = $('.review_next');
            next.on('click', function() {
                reviewSlider.trigger('next.owl.carousel');
            });
        }
    }


});