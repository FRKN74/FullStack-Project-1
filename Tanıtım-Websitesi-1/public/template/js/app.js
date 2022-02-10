$(document).ready(function () { 

    $('.card').hide();
    $('.loading').addClass('Nonloading');

    $(window).scroll(function () { 
        if ($(this).scrollTop() > 60) {
            $('nav').addClass('navbarFix').css({'transition' : '.5s'});
        }else{
            $('nav').removeClass('navbarFix');
        }

        $('#slider').each(function () {
            var kutuUst = $(this).offset().top;
            var pencereAlt = $(window).scrollTop() + $(window).height();
            if (pencereAlt > kutuUst) {
                $(this).animate({opacity : '1'},1000);
            }
        });
        $('.fadein').each(function () {
            var kutuUst = $(this).offset().top;
            var pencereAlt = $(window).scrollTop() + $(window).height();
            if (pencereAlt > kutuUst) {
                $(this).animate({opacity : '1'},1000);
            }
        });
    });

    $('.card').hide();
    $('#btnAbouts').click(function () {
        $('.card').toggle("fast");
    })

});