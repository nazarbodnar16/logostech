jQuery =$;
$(window).load(function () {
  $(".loader").delay(600).fadeOut("slow");
});

$(document).ready(function () {
  
  $('.bg-img').each(function() {
    $(this).css('background-image', 'url(' + $(this).find('> img').attr('src') + ')').find('> img').hide();
  });
  $('<a href="#" class="open-menu"><span></span>Open Menu</a>').appendTo('#header .container');
  $('<span class="fader"/>').appendTo('body');
  $('.open-menu').click(function(){
    $('body').toggleClass('menu-opened');
    return false;
    });//btn-open-manu

  $('.search-contact-box .seacrh-btn').click(function(){
    $('body').toggleClass('search-opened');
    
    return false;
    });//btn-open-manu
  $('.fader').click(function(){
    $('body').removeClass('search-opened');
  });

  var swiper = new Swiper('.baner-slider', {
    effect: 'fade',
    speed: 1500,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });

  var swiper = new Swiper('.comment-slider', {
    pagination: {
      el: '.swiper-pagination',
      clickable: true,
    },
  });


  var swiper_product = new Swiper('.product-slider', {
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {

      480: {
        slidesPerView: 1,
        spaceBetween: 10
      },

      680: {
        slidesPerView: 2,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }
  });


  var swiper_product = new Swiper('.product-row-slider', {
    slidesPerView: 2,
    spaceBetween: 15,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {

      480: {
        slidesPerView: 1,
        spaceBetween: 10
      },

      680: {
        slidesPerView: 2,
        spaceBetween: 20
      },

      1200: {
        slidesPerView: 2,
        spaceBetween: 30
      }
    }
  });

  var swiper_product = new Swiper('.recent-post-slider', {
    slidesPerView: 4,
    spaceBetween: 30,
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
    breakpoints: {

      768: {
        slidesPerView: 1,
        spaceBetween: 20
      },
      991: {
        slidesPerView: 2,
        spaceBetween: 20
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 30
      }
    }
  });

  $(document).ready(function() { 
 

    (function ($) { 
      $('.tab ul.tabs').addClass('active').find('> li:eq(0)').addClass('current');

      $('.tab ul.tabs li a').click(function (g) { 
        var tab = $(this).closest('.tab'), 
        index = $(this).closest('li').index();

        tab.find('ul.tabs > li').removeClass('current');
        $(this).closest('li').addClass('current');

        tab.find('.tab_content').find('div.tabs_item').not('div.tabs_item:eq(' + index + ')').slideUp();
        tab.find('.tab_content').find('div.tabs_item:eq(' + index + ')').slideDown();

        g.preventDefault();
      } );
    })(jQuery);

  });
  $(function() {
    $('.product-slider .swiper-slide').matchHeight();
    $('.product-row-slider .swiper-slide').matchHeight();
    $('.services-list .services-list-item .description .h4').matchHeight();
    $('.leadership-list .leadership-list-item  .description .holder').matchHeight();
    $('.recent-post-list li  .description .holder').matchHeight();
    $('.product-list.no-slider .box').matchHeight();
    $('.services-list-item .description .descr').matchHeight();
  });


});

$.fn.isInViewport = function() {
  var elementTop = $(this).offset().top;
  var elementBottom = elementTop + $(this).outerHeight();

  var viewportTop = $(window).scrollTop();
  var viewportBottom = viewportTop + $(window).height();

  return elementBottom > viewportTop && elementTop < viewportBottom && elementBottom < viewportBottom && elementTop > viewportTop;
//     return elementBottom > viewportTop && elementTop < viewportBottom;
};

$(window).on('resize scroll', function() {
  if ($(window).width() < 768) {
    $('.item-container').each(function () {
      if ($(this).isInViewport()) {
        $(this).addClass('active');
      } else {
        $(this).removeClass('active');
      }
    });
  }
});

sbg();

$('.select').on('click','.placeholder',function(){
  var parent = $(this).closest('.select');
  if ( ! parent.hasClass('is-open')){
    parent.addClass('is-open');
    $('.select.is-open').not(parent).removeClass('is-open');
  }else{
    parent.removeClass('is-open');
  }
}).on('click','ul>li',function(){
  var parent = $(this).closest('.select');
  parent.removeClass('is-open').find('.placeholder').text( $(this).text() );
  parent.find('input[type=hidden]').attr('value', $(this).attr('data-value') );
});