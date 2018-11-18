// Для перекрестия
// $(window).load(function(){
//     $(".search input").val("");
//
//     $(".input-effect input").focusout(function(){
//         if($(this).val() != ""){
//             $(this).addClass("has-content");
//         }else{
//             $(this).removeClass("has-content");
//         }
//     })
//
// });
function myFunction(x) {    // из трех полосов в крестик и обратно по клику  и отрывает закрывает мобильное меню
    x.classList.toggle("change");
    var x = document.getElementById("mobile-menu");
    if ($(window).width() <= '610'){
        if (x.style.display=== "block") {
            x.style.display = "none";
        } else {
            x.style.display = "block";
        }
    }
    else if ($('.nav-top-left-list').css('display') == 'none') {
        $('.nav-top-left-list').show();
    } else {
        $('.nav-top-left-list').hide();
    }
}
$(document).ready(function(){
    $('.fade').slick({
        dots: true,
        dotsClass: 'dots',
        prevArrow: false,
        nextArrow: false,
        infinite: true,
        speed: 500,
        fade: true,
        cssEase: 'linear'
    });
    if (($(window).width() <= '900')  ) // перемещает левые ссылки на право и включает слайдер
        $('.nav-top-left-list').hide().append($('.nav-top-right-list li'));
    if (($(window).width() <= '610')  ) {
        $('.nav-top-left-list').append($('.contacts'));
        $('.slider-advantages').slick({
            dots: true,
            dotsClass: 'dots dots-advantages',
            prevArrow: false,
            nextArrow: false,
            infinite: true,
            speed: 500,
            fade: true,
            cssEase: 'linear'
        });
    }

// $(window).on('load',hideMenu);
    $slider = $('.multiple-items').slick({
        infinite:true,
        slidesToShow: 6,
        slidesToScroll: 6,
        responsive: [
            {
                breakpoint: 1024,
                settings: {
                    slidesToShow: 4,
                    slidesToScroll: 4,
                }
            },
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 3,
                    slidesToScroll: 3
                }
            },
            {
                breakpoint: 610,
                settings: {
                    slidesToShow: 2,
                    slidesToScroll: 2
                }
            }
        ]
    });
    // if (($(window).width() <= '1024')  )
});