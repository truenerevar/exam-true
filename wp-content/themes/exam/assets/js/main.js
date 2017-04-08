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
    $('.client-slider').flexslider({
      animation: "slide",
      animationLoop: true,
      itemWidth: 300,
      itemMargin: 5
    });
  });
});

function myMap() {
  var mapCanvas = document.getElementById("map");
  var mapOptions = {
    center: new google.maps.LatLng(50.086575, 14.4186027),
    zoom: 15
  }
  var map = new google.maps.Map(mapCanvas, mapOptions);
}

$('a').click(function(){
  $('html, body').animate({
    scrollTop: $( $.attr(this, 'href') ).offset().top - $('.main-navigation').outerHeight() + 1
  }, 1000);
  return false;
});

function check_current_menu_item(){
  var headerHeight = $('.main-navigation').outerHeight();
  var mainHeaderHeight = $('.main-header').outerHeight();
  var scrollPos = $(document).scrollTop();
  $('.link-item a[href^="#"]').each(function () {
    var currLink = $(this);
    if ($(currLink.attr("href")).length) {
      var refElement = $(currLink.attr("href"));
      if (refElement.offset().top <= scrollPos + headerHeight + 1 && refElement.offset().top + refElement.outerHeight() - headerHeight - 2 >= scrollPos || scrollPos == $(document).outerHeight() - $(window).height()) {
        console.log("Element " + refElement.offset().top);
        console.log("Scroll " + scrollPos);
        $('.link-item a').removeClass("active");
        currLink.addClass("active");
      }
    }
  });
  if (scrollPos <= mainHeaderHeight) {
    $('.link-item a').removeClass("active");
  }
}
$(document).on("scroll", check_current_menu_item);

//isotope

var $container = $('.portfolio-list');
$('.portfolio-nav li a').click(function(){
  var $this = $(this);
  if ( !$this.hasClass('is-checked') ) {
    $this.parents('.portfolio-nav').find('.is-checked').removeClass('is-checked');
    $this.addClass('is-checked');
  }
  var selector = $this.attr('data-filter');
  $container.isotope({  itemSelector: '.item', filter: selector });
  return false;
});