$('.header-menu').on('click', function() {
    $('.header-flex').toggleClass('header-active');
}); 
$('.index-banner-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
$('.index-third-slider').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    dots:true,
    responsive:{

        0:{

            items:1
        },
        600:{
            items:3
        },
        1000:{

            items:4
        }
    }
})
$('.galler-first-slider').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})
$('.galler-first-slider-1').owlCarousel({
    loop:true,
    margin:10,
    nav:false,
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:4
        },
        1000:{
            items:4
        }
    }
})
$(document).ready(function() {
    $('.minus').click(function () {
        var $input = $(this).parent().find('input');
        var count = parseInt($input.val()) - 1;
        count = count < 1 ? 1 : count;
        $input.val(count);
        $input.change();
        return false;
    });
    $('.plus').click(function () {
        var $input = $(this).parent().find('input');
        $input.val(parseInt($input.val()) + 1);
        $input.change();
        return false;
    });
});

// PRODUCT DETAILS SLIDER
var swiper = new Swiper(".productSlideThumbs", {
  loop: true,
  spaceBetween: 10,
  slidesPerView: 4,
  freeMode: true,
  watchSlidesProgress: true,
});
var swiper2 = new Swiper(".productSlide", {
  loop: true,
  spaceBetween: 10,
  navigation: {
    nextEl: ".swiper-button-next",
    prevEl: ".swiper-button-prev",
},
thumbs: {
    swiper: swiper,
},
});



// RESPONSIVE NAVBAR
$(".toggle_btn").click(function(){
  $(".nav_bar").toggleClass("active");
});
$(".cls_btn").click(function(){
  $(".nav_bar").removeClass("active");
});