(function($) {
    "use strict";

    $('body').scrollspy({
        target: '.navbar-fixed-top',
        offset: 60
    });

    $('#topNav').affix({
        offset: {
            top: 200
        }
    });
    
    new WOW().init();
    
    $('a.page-scroll').bind('click', function(event) {
        var $ele = $(this);
        $('html, body').stop().animate({
            scrollTop: ($($ele.attr('href')).offset().top - 60)
        }, 1450, 'easeInOutExpo');
        event.preventDefault();
    });
    
    $('.navbar-collapse ul li a').click(function() {
        /* always close responsive nav after click */
        $('.navbar-toggle:visible').click();
    });

    $('#galleryModal').on('show.bs.modal', function (e) {
       $('#galleryImage').attr("src",$(e.relatedTarget).data("src"));
    });


    $(function(){
        $('#topNav').data('size','big');
    });

    $(window).scroll(function(){
        if($(document).scrollTop() > 0)
        {
            if($('#topNav').data('size') == 'big')
            {
                $('#topNav').data('size','small');
                $('#topNav').stop().animate({
                    height:'40px'
                },600);
                $('.search_bar').toggleClass("tiny");
            }
        }
        else
        {
            if($('#topNav').data('size') == 'small')
            {
                $('#topNav').data('size','big');
                $('#topNav').stop().animate({
                    height:'100px'
                },600);
            }
            $('.search_bar').toggleClass("tiny");
        }
    });
})(jQuery);