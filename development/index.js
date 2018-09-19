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

var swiper = new Swiper('.swiper-container', {
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
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
