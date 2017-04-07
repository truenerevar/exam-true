$(function() {

  //Chrome Smooth Scroll
  try {
    $.browserSelector();
    if($("html").hasClass("chrome")) {
      $.smoothScroll();
    }
  } catch(err) {

  };

  $("img, a").on("dragstart", function(event) { event.preventDefault(); });

  $('.menu-toggle').click(function() {
    $('.menu').slideToggle( 'fast' );
    if ($(this).hasClass('fa-times')) {
      $(this).removeClass('fa-times').addClass('fa-bars');
    } else {
      $(this).removeClass('fa-bars').addClass('fa-times');
    }
  });

  $( window ).resize(function() {
    if ($(document).width() > 767) {
      $('.menu').show();
    }
  });
  //Chrome Smooth Scroll
  try {
    $.browserSelector();
    if($("html").hasClass("chrome")) {
      $.smoothScroll();
    }
  } catch(err) {

  };

  $(window).load(function() {
    $('.flexslider').flexslider({
      animation: "slide"
    });
  });
});