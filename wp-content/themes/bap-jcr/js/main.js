$(document).ready(function() {

  $('#animation').fadeIn(900);

    $(window).load(function() {
        $("#posts-slider").flexisel({
            visibleItems: 3
        });
    });

  $(".language").hide();
  $(".language").delay("12000").fadeIn("slow");


  $(".tableau").on("mouseenter", function () { $(".info").animate({opacity:1}, {duration:200, easing:"linear"});	});
  $(".tableau").on("mouseleave", function () { $(".info").animate({opacity:0}, {duration:200, easing:"linear"});	});

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
});
