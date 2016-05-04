jQuery(document).ready(function( $ ) {
    $('.cadre').click(function(){
        $('.cadrecaption').addClass('fadeInUp');
        $('.cadrecaption').removeClass('invisible fadeOutDown');

    });
    $('.cadreclose').click(function(){
        $('.cadrecaption').removeClass('fadeInUp');
        $('.cadrecaption').addClass('fadeOutDown');

    });

});