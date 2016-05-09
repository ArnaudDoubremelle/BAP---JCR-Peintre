$(document).ready(function() {

  $('#animation').fadeIn(900);

    $(window).load(function() {
        $("#posts-slider").flexisel({
            visibleItems: 3
        });
    });

  $(".language").hide();
  $(".language").delay("12000").fadeIn("slow");

  var trigger = $('.link-menu'),
      faIcon = $('.icon-menu'),
      overlay = $('.overlay'),
      isClosed = false;

  function buttonSwitch() {

    if (isClosed == true) {
      overlay.hide();
      faIcon.removeClass('fa-times');
      faIcon.addClass('fa-bars');
      isClosed = false;
    } else {
      overlay.show();
      faIcon.removeClass('fa-bars');
      faIcon.addClass('fa-times');
      isClosed = true;
    }
  }

  trigger.click(function () {
    buttonSwitch();
  });

  $('[data-toggle="offcanvas"]').click(function () {
    $('#wrapper').toggleClass('toggled');
  });

// -------------------- Lightbox single

  $('.slider .image a').click(function() {
    var itemID = $(this).attr('href');
    $('.slider .image').addClass('item_open');
    $(itemID).addClass('item_open');
    return false;
  });
  $('.close').click(function() {
    $('.port, .slider .image').removeClass('item_open');
    return false;
  });

  // $(".slider .image a").click(function() {
  //   $('html, body').animate({
  //     scrollTop: parseInt($("#top").offset().top)
  //   }, 400);
  // });

});
