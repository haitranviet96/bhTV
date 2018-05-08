@extends('layouts.default')

@section('title','' . $film['name'] . '')

@section('content')
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/rating-star.css')}}">
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/comment.css')}}">
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<section class="bg-primary">
    <div class="container">
        <h2 class="margin-top-1 margin-bottom-1 text-primary">Movie Profile</h2>

        <div style="width: 40%; float:left;">
            <img src="{{$film['img_path']}}" class="img_bio_film">
            <a title="Click to add to wishlist" id="addToWishList" class="btn btn-default" style="margin-left: 200px; margin-top: 10px">
                <input type="hidden" id="film_id" value="{{$film['id']}}">
                Add to Wishlist
            </a>
        </div>

        <div style="width: 60%; float:right; ">
            <div>
                <p class="highlight_text">Film name:</p>
                {{$film['name']}}
            </div>
            <div>
                <p class="highlight_text">Actors:</p>
                @foreach ($film['actors'] as $actor)
                    <a style="color: cadetblue" href="/people/{{$actor['id']}}">{{$actor['name']}}</a>
                @endforeach
            </div>
            <div>
                <p class="highlight_text">Directors:</p>
                @foreach ($film['directors'] as $director)
                    <a style="color: cadetblue" href="/people/{{$director['id']}}">{{$director['name']}}</a>
                @endforeach
            </div>
            <div>
                <p class="highlight_text">Genre:</p>
                {{$film['genre']}}
            </div>
            <div>
                <p class="highlight_text"> Released date:</p>
                {{$film['released_date_str']}}
            </div>
            <div style="width: 70%; float: left">
                <p class="highlight_text">Short description:</p>
                <p style="width: 500px; text-align: justify">{{$film['description']}}</p>
            </div>
            <div style="clear: both">
                <p class="highlight_text">Length:</p>
                {{$film['length']}} mins
            </div>
            <div style="clear: both">
                <p class="highlight_text">Mature rate:</p>
                {{$film['mat_rate']}}
            </div>
            <div style="clear: both">
                <p class="highlight_text">Rate Info:</p>
                <div id="rate_info">Rated {{$film['avg_rate']}} stars out of {{$film['rate_times']}} reviews.
                </div>
            </div>
            <div class="outter_box">
                <p id="rate_noti"></p>
                <div class="rate">
                    <div id="1" class="btn-1 rate-btn"></div>
                    <div id="2" class="btn-2 rate-btn"></div>
                    <div id="3" class="btn-3 rate-btn"></div>
                    <div id="4" class="btn-4 rate-btn"></div>
                    <div id="5" class="btn-5 rate-btn"></div>
                    <div id="6" class="btn-6 rate-btn"></div>
                    <div id="7" class="btn-7 rate-btn"></div>
                    <div id="8" class="btn-8 rate-btn"></div>
                    <div id="9" class="btn-9 rate-btn"></div>
                    <div id="10" class="btn-10 rate-btn"></div>
                </div>
            </div>
        </div>
        <div style="clear:both;">
            <div style="width: 40%; float:left;"></div>
            <div style="width: 60%; float:right;">
                <div id="comment_form">
                    <div>
                        <form action="/comment_submit">
                            <div><textarea rows="3" name="comment" id="comment" placeholder="Comment"></textarea></div>
                            <div><input type="button" name="submit" value="Add Comment" id="comment_btn"></div>
                        </form>
                    </div>
                    <div id="all_comments">
                        @foreach($comment_query as $comment)
                        <div class='friend'>
                            <h5 class="commenter">{{$comment['user_name']}}</h5>
                            <p class="comment_content">{{$comment['comment']}}</p>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        <div style="clear:both; width:100%;"></div>
        @if(count($suggest_films) > 0)
        <div class="films_concern" style="margin-top: 50px">
            <p class="fimls_concern_title">
                May be you are interested?
            </p>
            <div class="detail_line"></div>
            <div class="list_films_concern" id="dtaildkms" style="width: 940px; height: 250px; position: relative; overflow: hidden;">
                <div class="sl" style="position: absolute; width: 940px; height: 250px; display: block;">
                    @for($i = 0;$i < 6;$i++)
                    <div class="film">
                        <a href="/movie/{{$suggest_films[$i]['id']}}" class="tooltipPLQL">
                            <img src="{{$suggest_films[$i]['img_path']}}" title="{{$suggest_films[$i]['name']}}" width="134" height="193">
                        </a>
                        <a href="/movie/{{$suggest_films[$i]['id']}}" title="{{$suggest_films[$i]['name']}}">
                            <figcaption>{{$suggest_films[$i]['name']}}</figcaption>
                        </a>
                    </div>
                    @endfor
                </div>
                <div class="sl" style="position: absolute; width: 940px; height: 250px;">
                                @for($i = 6;$i < count($suggest_films);$i++)
                                <div class="film">
                                    <a href="/movie/{{$suggest_films[$i]['id']}}" class="tooltipPLQL">
                                        <img src="{{$suggest_films[$i]['img_path']}}" title="{{$suggest_films[$i]['name']}}" width="134" height="193">
                                    </a>
                                    <a href="/movie/{{$suggest_films[$i]['id']}}" title="{{$suggest_films[$i]['name']}}">
                                        <figcaption>{{$suggest_films[$i]['name']}}</figcaption>
                                    </a>
                                </div>
                                @endfor
                </div>
            </div><a href="#" id="fssPlayPause">Play</a><ul id="fssList"><li class="fssLi0 fssActive"><a href="#">1</a></li><li class="fssLi1"><a href="#">2</a></li><li class="fssLi2"><a href="#">3</a></li></ul>
            <a href="" class="arrow_preview" id="fssPrev"></a>
            <a href="" class="arrow_next" id="fssNext"></a>
            <style>
                #fssList{display: none;}
                #fssPlayPause{display: none;}
            </style>
        </div>
        @endif
    </div>
</section>
<script>
    $(function () {
        var previous_rate = "<?php echo $film['previous_rate'];?>";
        if (previous_rate > 0) {
            $("#rate_noti").html("<p>You rated this film <?php echo $film['previous_rate']; ?> stars</p>");
            $('.rate-btn').removeClass('rate-btn-active');
            for (var i = previous_rate; i >= 0; i--) {
                $('.btn-' + i).addClass('rate-btn-active');
            }
            ;
        }
        else {
            $("#rate_noti").html("<p>You have not rated this film</p>");
        }

        $('.rate-btn').hover(function () {
            $('.rate-btn').removeClass('rate-btn-hover');
            var therate = $(this).attr('id');
            for (var i = therate; i >= 0; i--) {
                $('.btn-' + i).addClass('rate-btn-hover');
            }
            ;
        });

        $('.rate-btn').click(function () {
            var therate = $(this).attr('id');
            var dataRate = "<?php echo $film['id'];?>";
            $('.rate-btn').removeClass('rate-btn-active');
            for (var i = therate; i >= 0; i--) {
                $('.btn-' + i).addClass('rate-btn-active');
            }
            ;
            $.ajax(
                {
                    method: 'GET',
                    url: '/rate',
                    data: {
                        rate: 1,
                        film_id: dataRate,
                        rate_point: therate,
                    },
                    success: function (return_var) {
                        if (return_var.command_code == 0) {
                            swal("Sorry!", "You need to login before rating this film!", "error");
                            // window.location.href = "/login"
                        }
                        else {
                            // alert("Thank you for your rating!");
                            swal("Good job!", "Thank you for your rating!", "success");
                            $("#rate_info").html("<p>Rated " + return_var.avg_point + " stars out of " + return_var.rate_times + " reviews.</p>");
                            $("#rate_noti").html("<p>You rated this film " + therate + " stars</p>");
                            // console.log(return_var);
                        }
                    },
                    dataType: 'Json',
                });
        });
        $("#comment_btn").click(function () {
            var comment_box = document.getElementById('comment').value;
            var film_id = "<?php echo $film['id']; ?>";
            if (comment_box.length < 20) {
                swal("Something's wrong!", "Comment should be more than 20 characters!", "warning");
            } else {
                $.ajax(
                    {
                        method: 'GET',
                        url: '/comment_add',
                        data: {
                            film_id: film_id,
                            comment: comment_box
                        },
                        success: function (comment_add) {
                            if (comment_add['added'] == 0) {
                                swal("Sorry!", "You need to login before commenting this film!", "error");
                                // window.location.href = "/login"
                            }
                            else {
                                var all_comments = document.getElementById('all_comments');
                                var old_comments = all_comments.innerHTML;
                                var added_comment = "<div class='friend'>" +
                                    "                        <h5 class=\"commenter\">" + comment_add['user_name'] + "</h5>" +
                                    "                        <p class=\"comment_content\">" + comment_box + "</p>" +
                                    "                    </div>";
                                swal("Very good!", "Thank you for your comment!", "success");
                                all_comments.innerHTML = added_comment + old_comments;
                            }
                        },
                        dataType: 'Json',
                    }
                );
            }
        });

        $('#dtaildkms').fadeSlideShow({
            width: 940,
            height:250,
            interval: 6000
        });
    });
</script>
@endsection


