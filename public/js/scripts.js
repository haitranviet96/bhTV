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


    $(window).on("scroll touchmove", function () {
        $('.search_bar').toggleClass('tiny', $(document).scrollTop() > 0);
    });
    
    $('a#addToWishList').bind('click',function () {
        var film_id = $(this).children('#film_id').val();
        if(user == null)
        {
            alert("You must login to complete this task!");
            return;
        } else
            {
                var user_id = user.id;
            }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            url: ajaxAddWishList,
            datatType : 'json',
            type: 'POST',
            data: {
                film_id : film_id,
                user_id: user_id,
            },
            contentType: "application/x-www-form-urlencoded",

            success:function(response) {
                console.log(response);
                if(response == 1)
                {
                    alert("The chosen film was already in your WishList!");
                } else if(response == 2)
                {
                    alert("The chosen film was successfully added to wishlist!");
                } else if(typeof response == "undefined")
                {
                    alert("Error Undefined response!");
                }
            },
            error:function(){
                alert("Error!!!!");
            }
        });
    });
    $('button#button_remove_film').click(function () {
        var film_id = $(this).val();
        var self = this;
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        if (confirm('Are you sure you want to remove this film from your list?')) {
            $.ajax({
                url: ajaxRemoveWishList,
                type: 'POST',
                data:{
                    user_id : user.id,
                    film_id : film_id,
                },
                contentType: "application/x-www-form-urlencoded",
                success : function (response) {
                    if(response == 1)
                    {
                        $(self).parent().parent().hide('slow', function(){ $(self).parent().parent().remove(); });
                    } else {
                        alert("There was a problem!");
                    }
                },
                error: function () {
                    alert("Delete Error!");
                }
            });
        }
    });
})(jQuery);