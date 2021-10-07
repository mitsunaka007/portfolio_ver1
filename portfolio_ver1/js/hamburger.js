jQuery(document).ready(function($){
    $('.hamburger').click(function(){
        $('.hamburger').toggleClass('active');
        $('.menu').toggleClass('open');
    }); 
});

jQuery(function ($) {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 10) {
            $('#menu').addClass('fixed');
        } else {
            $('#menu').removeClass('fixed');
        }
    });
});