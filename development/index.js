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
  $('.btn-scroll').on('click', function(e) {
    e.preventDefault();
    $('html, body').animate({ scrollTop: $($(this).attr('href')).offset().top}, 500, 'linear');
  });


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

      768: {
        slidesPerView: 2,
        spaceBetween: 20
      },

      1025: {
        slidesPerView: 3,
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

  $(function() {
    $('.product-slider .swiper-slide').matchHeight();
    $('.services-list .services-list-item .description .h4').matchHeight();
    $('.leadership-list .leadership-list-item  .description .holder').matchHeight();
    $('.recent-post-list li  .description .holder').matchHeight();
    $('.product-list.no-slider .box').matchHeight();
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
