$(document).ready(function () {
    /**
     * Bx slider js code activation
     */
    var window_width_for_bxslider = $(window).width();

    $('.bxslider').bxSlider({
        mode: 'fade',
        captions: true,
        pagerCustom: '#bx-pager',
        adaptiveHeight: true,
        slideWidth: window_width_for_bxslider,
    });

});

