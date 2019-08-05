(function($){
  jQuery(document).ready( function($) {
    
    $(document).ready(function() {
    //sticky header
  /*  "use strict";
    exSticky();
    $(window).scroll(exSticky);

    function exSticky() {
        var height = $(window).scrollTop(),
            stickyHeight = $('.header').outerHeight(),
            scroll = $(window).scrollTop(),
            slowscroll = scroll / 2;
        $('body').removeClass('sticky');
        if (height > 0) {
            $('body').addClass('sticky');
            $('.banner-img').css({
                //          transform: "translateY(" + slowscroll + "px)"
            });
        } else {
            $('body').removeClass('sticky');
            $('.banner-img').css({
                //           transform: "translateY(0)"
            });
        }
    }*/

 $("#webticker").webTicker();

 $('.main-slider').slick({
  autoplay:true,
  fade:false,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 1000,
  infinite: true,
  speed: 500,
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  });
  

  $('.editor-list').slick({
  autoplay:true,
  fade:false,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 1000,
  infinite: true,
  speed: 500,
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  arrows:true
  });


  $(".btn-search").click(function(){
  $("#header-search").slideToggle();
});

 $('.hamburger').click(function() {
    
    if($(this).hasClass('active')) {
      $('.side-canvas').removeClass('gm-canvas-show');
       $(this).removeClass('active');
    }else{ 
      $('body').addClass('canvas_open');
      $('.side-canvas').addClass('gm-canvas-show');
        $(this).addClass('active');
        $(".overlay").show();
    }
    
    $(".close").click(function(){
      $(".hamburger.hamburger_nb").removeClass("active");
      $(".side-canvas").removeClass("gm-canvas-show");
      $(".overlay").fadeOut();
      //$('.header-inner').removeClass("overlay");
    });
    $(".overlay").click(function(){
      $(".hamburger.hamburger_nb").removeClass("active");
      $(".side-canvas").removeClass("gm-canvas-show");
      $(".overlay").fadeOut();
      //$('.header-inner').removeClass("overlay");
    });
  });


});

// Mobile Menu
$('.mobile-menu').click(function(e) {
  //e.preventDefault();
 // $('body').toggleClass('nav-open');
  //$(this).toggleClass('active');
  $('.main_navigation').slideToggle('medium');
});
$('.main_navigation .menu-item-has-children > a').each(function() {
  $(this).after('<span class=\'sub-toggle\'><i class=\'fa fa-angle-down\'></i></span>');

}); 
$(document).on('click', '.sub-toggle', function(){
  $(this).toggleClass('open').next('.sub-menu').slideToggle();
});

$(document).on('load', '.loader', function(){
  $(this).fadeIn('slow');
});
 

$('.gm-slider').slick({
  autoplay:true,
  fade:false,
  dots:false,
  arrows:true,
  slidesToShow: 1,
  autoplaySpeed: 1000,
  infinite: true,
  speed: 500,
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  arrows:true,
  slidesToShow: 4,
  slidesToScroll:1,
  responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 1,
        slidesToScroll: 1
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
});


$('.gm-slider2').slick({
  autoplay:true,
  fade:true,
  dots:false,
  slidesToShow: 1,
  slidesToScroll: 1,
  autoplaySpeed: 1000,
  infinite: true,
  speed: 500,
  asNavFor: '.gm-slider2-related-p',
  cssEase: 'linear',
  prevArrow:'<button type="button" class="prev"><i class="fa fa-angle-left"></i></button>',
  nextArrow:'<button type="button" class="next"><i class="fa fa-angle-right"></i></button>',
  arrows:false
  
  });

  $('.gm-slider2-related-p').slick({
    slidesToShow: 4,
    slidesToScroll: 1,
    asNavFor: '.gm-slider2',
    dots: false,
    centerMode: false,
    focusOnSelect: true,
    arrows:false,
    responsive: [
    {
      breakpoint: 1024,
      settings: {
        slidesToShow: 3,
        slidesToScroll: 1,
        infinite: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
        slidesToScroll: 1
      }
    },
    {
      breakpoint: 480,
      settings: {
        slidesToShow: 0,
        slidesToScroll: 0
      }
    }
    // You can unslick at a given breakpoint now by adding:
    // settings: "unslick"
    // instead of a settings object
  ]
  });

 
});

 $(window).load(function() {
    $(".loader-wrap").fadeOut("slow");
  });

 
 


})(jQuery);