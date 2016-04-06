$(document).ready(function() {

  $(".language").hide();
  $(".language").delay("12000").fadeIn("slow");

  $('#media').carousel({
    pause: true,
    interval: false,
  });

  var trigger = $('.link-menu'),
      overlay = $('.overlay'),
      isClosed = false;

  function buttonSwitch() {

    if (isClosed == true) {
      overlay.hide();
      isClosed = false;
    } else {
      overlay.show();
      isClosed = true;
    }
  }

  trigger.click(function () {
    buttonSwitch();
  });

  $('[data-toggle="offcanvas"]').click(function () {
    $('#wrapper').toggleClass('toggled');
  });
});
