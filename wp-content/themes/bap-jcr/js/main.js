$(document).ready(function() {
  $('#media').carousel({
    pause: true,
    interval: false,
  });

  var trigger = $('.icon-menu'),
      overlay = $('.overlay'),
      isClosed = false;

  function buttonSwitch() {

    if (isClosed === true) {
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
