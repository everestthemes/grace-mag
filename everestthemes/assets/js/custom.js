(function($){
  jQuery(document).ready( function($) {
    
    $(document).ready(function() {

      function sticky_relocate() {
    var window_top = jQuery(window).scrollTop();
    var footer_top = jQuery(".footer-bg").offset().top;
    var div_top = jQuery('.sticky-portion').offset().top + jQuery('.sticky-portion').height();
    var div_height = jQuery(".sticky-portion").height();
 
    var padding = 20;  
 
    if (window_top + div_height > footer_top - padding) {
        jQuery('.').css({top: (window_top + div_height - footer_top + padding) * -1});
    }
    else if (window_top > div_top) {
        jQuery('.sticky-portion').addClass('stick');
        jQuery('.sticky-portion').css({'top':'80' });
    } else {
        jQuery('.sticky-portion').removeClass('stick');
    }
}
 
jQuery(document).ready(function() {
    jQuery(window).scroll(sticky_relocate);
    sticky_relocate();
});
 

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

 
 //Show or hide the button
    $(window).scroll(function() {
        if ($(this).scrollTop() > 300) {
            $('.scrollup').fadeIn(1000);
        } else {
            $('.scrollup').fadeOut(1000);
        }
    });


})(jQuery);