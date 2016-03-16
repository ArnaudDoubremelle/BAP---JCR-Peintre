jQuery(document).ready(function( $ ) {

     /* Push the body and the nav over by 285px over */
    $('.open-menu').click(function() {
     $('.nav-menu').animate({
     right: "0px"
     }, 200);

     $('.menu-icon').animate({
     right: "350px"
     }, 200);
     });

     /* Then push them back */
    $('.container').click(function() {
     $('.nav-menu').animate({
     right: "-400px"
     }, 200);

     $('.menu-icon').animate({
     right: "0px"
     }, 200);
     });

     $('.icon-close').click(function() {
     $('.nav-menu').animate({
     right: "-400px"
     }, 200);

     $('.menu-icon').animate({
     right: "0px"
     }, 200);
     });
});
/*var menu = function() {
 /* Push the body and the nav over by 285px over */
/*$('.open-menu').click(function() {
    $('.nav-menu').animate({
        right: "0px"
    }, 200);

    $('.menu-icon').animate({
        right: "350px"
    }, 200);
});

/* Then push them back */
/*$('.container').click(function() {
    $('.nav-menu').animate({
        right: "-400px"
    }, 200);

    $('.menu-icon').animate({
        right: "0px"
    }, 200);
});

$('.icon-close').click(function() {
    $('.nav-menu').animate({
        right: "-400px"
    }, 200);

    $('.menu-icon').animate({
        right: "0px"
    }, 200);
});
};*/

