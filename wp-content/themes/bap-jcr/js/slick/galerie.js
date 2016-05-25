var $=jQuery;
$(document).ready(function () {
    $('.slider').slick({
        variableWidth: false,
        centerMode: true,
        centerPadding: '60px',
        slidesToShow: 3,
        variableWidth: false,
        adaptiveHeight: true,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 3
                }
            },
            {
                breakpoint: 480,
                settings: {
                    arrows: true,
                    centerMode: true,
                    centerPadding: '40px',
                    slidesToShow: 1
                }
            }
        ]
    });
});