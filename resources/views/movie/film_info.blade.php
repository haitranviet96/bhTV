@extends('layouts.default')
@section('title','Film Information')
@section('content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/rating-star.css')}}">
    <section class="bg-primary">
        <h2 class="margin-top-1 margin-bottom-1 text-primary">Movie Profile</h2>

        <div style="width: 40%; float:left;">
            <img src="{{$film['img_path']}}" class="img_bio_film" >
        </div>
        <div style="width: 60%; float:right; ">
           <div>
               <p class="highlight_text">Film name:</p>
               {{$film['name']}}
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
               <p>{{$film['description']}}</p>
           </div>
            <div style="clear: both">
                <p class="highlight_text">Length:</p>
                {{$film['length']}} mins
            </div>
            <div  style="clear: both">
                <p class="highlight_text">Mature rate:</p>
                {{$film['mat_rate']}}
            </div>
            <div  style="clear: both">
                <p class="highlight_text">Rate Info:</p>
                <div id="rate_info">Rated {{$film['avg_point']}} stars out of {{$film['rate_times']}} reviews.
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
                    <div id="10"class="btn-10 rate-btn"></div>
                </div>
                {{--<div class="result-container">--}}
                    {{--<div class="rate-bg" style="width: 60%"></div>--}}
                    {{--<div class="rate-stars"></div>--}}
                {{--</div>--}}
            </div>

        </div>
        <div style="width: 40%; clear:both">

        </div>
  </section>
    <script>
        $(function(){
                var previous_rate = "<?php echo $film['previous_rate'];?>";
                if(previous_rate > 0){
                    $("#rate_noti").html("<p>You rated this film <?php echo $film['previous_rate']; ?> stars</p>");
                    $('.rate-btn').removeClass('rate-btn-active');
                    for (var i = previous_rate; i >= 0; i--) {
                        $('.btn-'+i).addClass('rate-btn-active');
                    };
                }
                else{
                    $("#rate_noti").html("<p>You have not rated this film</p>");
                }

            $('.rate-btn').hover(function(){
                $('.rate-btn').removeClass('rate-btn-hover');
                var therate = $(this).attr('id');
                for (var i = therate; i >= 0; i--) {
                    $('.btn-'+i).addClass('rate-btn-hover');
                };
            });

            $('.rate-btn').click(function(){
                var therate = $(this).attr('id');
                var dataRate = "<?php echo $film['id'];?>";
                $('.rate-btn').removeClass('rate-btn-active');
                for (var i = therate; i >= 0; i--) {
                    $('.btn-'+i).addClass('rate-btn-active');
                };
                $.ajax(
                    {
                    method : 'GET',
                    url : '/rate',
                    data:{
                        rate: 1,
                        film_id: dataRate,
                        rate_point: therate,
                    },
                    success:function(return_var){
                        if(return_var.command_code == 0){
                            alert("We are so sorry, you need to login before rating this film!");
                            window.location.href = "/login"
                        }
                        else{
                            alert("Thank you for your rating!");
                            $("#rate_info").html("<p>Rated "+return_var.avg_point+" stars out of "+return_var.rate_times+" reviews.</p>");
                            $("#rate_noti").html("<p>You rated this film "+therate+" stars</p>");
                            console.log(return_var);
                        }
                    },
                    dataType: 'Json',
                    });
            });
        });
    </script>

@endsection


