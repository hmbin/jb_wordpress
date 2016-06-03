/*
 *  Blog64 Theme Custom Scripts
 *
 *  Copyright (c) 2015 Suman Shrestha
 *  http://www.sumanshresthaa.com.np/
 *
 *  Licensed under MIT
 *
 */

(function($) {
  //Tab to top
  $(window).scroll(function() {
    if ($(this).scrollTop() > 1){  
      $('.scroll-top-wrapper').addClass("show");
    }
    else{
      $('.scroll-top-wrapper').removeClass("show");
    }
  });


  $(".scroll-top-wrapper").on("click", function() {
    $("html, body").animate({ scrollTop: 0 }, 600);
    return false;
  });
})(jQuery);


// Animations
new WOW().init();