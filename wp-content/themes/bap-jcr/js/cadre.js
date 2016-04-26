jQuery(document).ready(function( $ ) {
    $('.cadre').click(function(){
        $('.cadrecaption').addClass('slideInUp');
        $('.cadrecaption').removeClass('invisible slideOutDown');

    });
    $('.cadreclose').click(function(){
        $('.cadrecaption').removeClass('slideInUp');
        $('.cadrecaption').addClass('slideOutDown');

    });

});