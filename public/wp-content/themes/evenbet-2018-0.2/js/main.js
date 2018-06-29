$(document).ready(function () {
    $('.toggle').click(function () {
        $('.toggle').toggleClass('active');
        $('.nav').toggleClass('active');
    });
    //попытка менять ориентации стрели в popup buy form
    $('.select2.select2-container.select2-container--evenbetgaming.select2-container--above').click(function () {
        $('.fa').toggleClass('active');
        // $('.nav').toggleClass('active');
    });

    $('.dropdown-toggle').click(function () {
        $('.dropdown-toggle').removeClass('active');
        if ($(this).next('.dropdown__sub-menu').css("display") == "none") {
            $('.dropdown__sub-menu').hide('normal');
            $(this).next('.dropdown__sub-menu').toggle('normal');
            $('.dropdown-toggle').removeClass('active');
            $(this).toggleClass('active');
        } else $('.dropdown__sub-menu').hide('normal');
        return false;
    });
    // вызов popup и закрытие его
    $('.nav-top_botton').on('click', function () {
        $('.overlay').show()
    });
    $('.event-button').on('click', function () {
        $('.overlay').show()
    });
    $('.popup-close').on('click', function () {
        $('.overlay').hide()
    });
    // инициализация select2 popup form
    $('.popup-dropdown').select2({
        width: 'style',
        theme: 'evenbetgaming'
    });

    // инициализация select2 buy form casino, poker and fantasy sport pages
    $('.buy-form-dropdown').select2({
        width: 'style',
        theme: 'evenbetgaming__buy-form'
    });

    //стрелка Selecta buy form
    $('b[role="presentation"]').hide();
    $('.select2-selection__arrow').append('<i class="fa fa-angle-down"></i>');
	/**/
    var mySwiper = new Swiper('#slider1', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        // Navigation arrows
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
        },
        // Default parameters
        slidesPerView: 6,
        spaceBetween: 30,
        // Responsive breakpoints
        breakpoints: {
            // when window width is <= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window width is <= 576px
            576: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is <= 1024px
            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is <= 1200px
            1200: {
                slidesPerView: 5,
                spaceBetween: 30
            }
        }
    });
    var mySwiperCustomers = new Swiper('#slider2', {
        // Optional parameters
        direction: 'horizontal',
        loop: true,

        centeredSlides: true,
        // Navigation arrows
        navigation: {
            nextEl: '.swiper-customer-button-next .swiper-button-next',
            prevEl: '.swiper-customer-button-prev .swiper-button-prev',
        },
        // Default parameters
        slidesPerView: 5,
        spaceBetween: 40,

        breakpoints: {
            // when window width is <= 320px
            320: {
                slidesPerView: 1,
                spaceBetween: 10,
                centeredSlides: true
            },
            // when window width is <= 576px
            576: {
                slidesPerView: 1,
                spaceBetween: 10
            },
            // when window width is <= 768px
            768: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is <= 1024px
            1024: {
                slidesPerView: 3,
                spaceBetween: 30
            },
            // when window width is <= 1200px
            1200: {
                slidesPerView: 5,
                spaceBetween: 30
            }
        }
    });
    // var twSchoolSlide = new Swiper ('#school_slider', {
    // 	slidesPerView: '2',
    // 	centeredSlides: true,
    // 	spaceBetween: 40,
    // 	preloadImages: false,
    // 	lazyLoading: true,
    // 	lazyLoadingInPrevNext: true,
    // 	loop: true,
    // 	loopedSlides: '2',
    // 	watchSlidesProgress: true,
    // 	watchSlidesVisibility:true,
    // 	nextButton: '#school_next',
    // 	prevButton: '#school_prev'
    // })

    //*slider3*//

    if (document.getElementById("swiper-container-3")) {
        var swiper = new Swiper('#swiper-container-3', {

            spaceBetween: 0,

            slidesPerView: 'auto',
            centeredSlides: true,
            pagination: {
                el: '.swiper-pagination-3',
                clickable: true
            },
            navigation: {
                nextEl: '.swiper-button-next-3',
                prevEl: '.swiper-button-prev-3'
            },
            //parameters
            breakpoints: {
                // when window width is <= 320px
                640: {
                    slidesPerView: 1,
                    centeredSlides: true
                }
            }
        });
        swiper.slideNext();
	};
	//Slider block Home-page
	$(function() {
		$('.slider-block-li').click(function () {
			 var id = $(this).attr('id');
		  var  $nubmer =  Number($('.slider-block-li').index($(this)));  //номер элемента по которму кликнули
			 if ($(this).hasClass( 'activet' )) { //кликнули li который имеет класс activet ?
				  return;
			 }
			 else {
				 $('ul.slider-block-ul li').removeClass( 'activet' ); //найти элемент ли с классом activet и удалить activet
				 $('ul.slider-block-ul span').removeClass( 'activet-line' );

				 $(this).addClass('activet');                    //добавить класс в li
				 $(this).find('span').addClass('activet-line');  // добавить класс к span

				 $('ul.slider-block.view').find('li.slider-block.activet').hide(); // закрываем
				 $('ul.slider-block.view').find('li.slider-block.activet').removeClass( 'activet' ); //удаляем класс

				 $('div.view').find('.activet').removeClass( 'activet' ).hide(); // закрываем

				 $('ul.slider-block.view li').eq($nubmer).addClass( 'activet' ).show(); //показываем

				 $("#"+$nubmer).addClass( 'activet' ).show(); //показываем
			 }
		 });
	 });

    //
    $('.img-angle').click(function () {

            if($(".hier").hasClass('angle-up')) {
                $(this).find('div.hier').removeClass('angle-up').addClass('angle-down');
                $('#features-list').slideUp( 'fast' );
            }else {

                $(this).find('div.hier').removeClass( 'angle-down' ).addClass( 'angle-up' );
                $('#features-list').slideDown( 'fast' );
            }

    });





//*табы для мобильного разрешения*//
    if (document.getElementById("main-casino")) {
        var blue = document.getElementById('main-casino');

        var options = {
            preventDefault: true
        };
        var hammertime = new Hammer(blue, options);
        hammertime.on("swipeleft swiperight", function (ev) {
            if (ev.type === 'swipeleft')
                $('#nav-prev-home').trigger('click');
            else
                $('#nav-prev-home').trigger('click');
        });

//*табы для десктопа, подсчет количество слайдов*//
        $(document).ready(function () {
            $count = $('.home-casino-block-products-list').find($("li")).length;
            $('#page-count').text($count);
            $('#page-active').text(1);
        });
        $("#nav-prev-home").click(function () {
            $tab = $('#page-active').html();
            $tab--;
            if ($tab == 0) {
                $tab = $('.home-casino-block-products-list').find($("li")).length;
                $tab--;
            }
            else
                $tab--;
            $('#page-active').text($tab + 1);
            $('ul.home-casino-block-products-list li').removeClass('list-active');    //удаляет класс в li
            $('.home-casino-block').find('.home-active').removeClass('home-active').hide();//удаляет класс в tabs

            $('.home-casino-block-products-list li').eq($tab).addClass('list-active'); //активировали li
            $("#home" + $tab).addClass('home-active').show(); //показываем tab

        });
        $("#nav-next-home").click(function () {
            $tab = $('#page-active').html();
            $end = $('.home-casino-block-products-list').find($("li")).length;
            if ($tab == $end) {
                $tab = 0;
            }
            $tab++;
            $('#page-active').text($tab);
            $('ul.home-casino-block-products-list li').removeClass('list-active');    //удаляет класс в li
            $('.home-casino-block').find('.home-active').removeClass('home-active').hide();//удаляет класс в tabs

            $('.home-casino-block-products-list li').eq($tab - 1).addClass('list-active'); //активировали li
            $("#home" + ($tab - 1)).addClass('home-active').show(); //показываем tab

        });
    }
    (function( $ ) {
        'use strict';
        /**
         * Скрипт скрывает и открывает tab при разрешении больше 720px
         */
        $(function() {
            $('.home-casino-block-products-list-item').click(function () {
                var id = $(this).attr('id');
                var  $nubmer =  Number($('.home-casino-block-products-list-item').index($(this)));  //номер элемента по которму кликнули

                if ($(this).hasClass( 'list-active' )) { //кликнули li который имеет класс active
                    return;
                }
                else {
                    $('ul.home-casino-block-products-list li').removeClass( 'list-active' ); //найти элемент ли с классом activet и удалить activet
                    $(this).addClass('list-active');                    //добавить класс в li


                    $('.home-casino-block').find('.home-active').removeClass( 'home-active' ).hide(); // закрываем

                    $("#home"+$nubmer).addClass( 'home-active' ).show(); //показываем
                    $('#page-active').text($nubmer+1);
                }


            });
        });

    })( jQuery );
    //*FAQ*//
        /**
         * Скрипт скрывает и открывает ответ на вопрос
         */

            $('.qe-toggle-title1').click(function () {
                var parent_toggle = $(this).closest('.qe-faq-toggle1');
                if ( parent_toggle.hasClass( 'active' ) ) {
                    $(this).find('div.hier').removeClass( 'angle-up' ).addClass( 'angle-down' );
                    parent_toggle.removeClass( 'active' ).find( '.qe-toggle-content1' ).slideUp( 'fast' );
                } else {
                    $(this).find('div.hier').removeClass( 'angle-down' ).addClass( 'angle-up' );
                    parent_toggle.addClass( 'active' ).find( '.qe-toggle-content1' ).slideDown( 'fast' );
                }
            });

        //*How to buy*//
         /**
         * How to buy
         */
    if (document.getElementsByClassName(".wrapper-how-to-buy")) {
        $(function () {
            $('.slider-li').click(function () {
                var id = $(this).attr('id');
                var $nubmer = Number($('.slider-li').index($(this)));  //номер элемента по которму кликнули
                if ($(this).hasClass('activet')) { //кликнули li который имеет класс activet ?
                    return;
                }
                else {
                    $('ul.slider-ul li').removeClass('activet'); //найти элемент ли с классом activet и удалить activet
                    $('ul.slider-ul span').removeClass('activet-line');

                    $(this).addClass('activet');                    //добавить класс в li
                    $(this).find('span').addClass('activet-line');  // добавить класс к spon

                    $('ul.view').find('li.activet').hide(); // закрываем
                    $('ul.view').find('li.activet').removeClass('activet'); //удаляем класс


                    $('div.view').find('.activet').removeClass('activet').hide(); // закрываем

                    $('ul.view li').eq($nubmer).addClass('activet').show(); //показываем

                    $("#" + $nubmer).addClass('activet').show(); //показываем

                }


            });
        });
    }




});//document ready
