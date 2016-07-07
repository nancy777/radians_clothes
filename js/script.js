$(document).ready(function () {
    /*header-top mobile menu*/
    var pull 		= $('#header-menu');
    var menu 		= $('.nav-top');
    var menuHeight	= menu.height();

    $(pull).on('click', function(e) {
        e.preventDefault();
        menu.slideToggle();
    });

    $(window).resize(function(){
        var w = $(window).width();
        if(w > 320 && menu.is(':hidden')) {
            menu.removeAttr('style');
        }

    });
    /*close header-top mobile menu*/
    /*show header__search*/
    $('.search').click(function () {
        $('.header__search').slideToggle(
            function(){
                $('.header__search').eq($(this).index()).show();
            },
            function(){
                $('.header__search').eq($(this).index()).hide();
            }
        );
    });
    /*close header__search*/
    /*owl.slider*/
    var owl = $('.slider__box');
    owl.owlCarousel({
        loop: true,
        margin:0,
        nav:true,
        autoplay: true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:3
            }
        }
    });
    owl.on('changed.owl.carousel', function(event) {
        console.log(event.page.index);
    });
    /*close owl.slider*/
    $('.Go_Top').click(function () {/*функция плавной прокрутки вверх при клике на стрелку "вверх"*/
        $("html, body").animate({scrollTop: 0}, "slow");
        return false;
    });
    /*menu tabs function*/
    /*var show = $('.active');*/
    
    /*$('ul.nav-top a.home').click(function () {
       $('#home').css({visibility: 'visible'});
    });*/
    /*$('.catalog').click(function () {
       $('#catalog').css({visibility: 'visible'});
    });*/

    /*close tabs function*/
});