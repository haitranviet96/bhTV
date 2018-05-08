@extends('layouts.default')

@section('title','Discover Movies')

@section('content')
<link type="text/css" rel="stylesheet" href="{{URL::asset('css/rating-star.css')}}">
<section class="bg-primary" id="popular">
    <div class="container">
        <h2 class="margin-top-1 margin-bottom-1 text-primary">Discover Movies</h2>
        <div class="col-sm-12 margin-bottom-1" style="margin-bottom: 20px">
            <form id="discover_form" onchange="submitForm()" onsubmit="submitForm()">
                <span class="search_element">
                    <label for="year">Year</label>
                    <select class="form-control" id="year" name="primary_release_year">
                        <option value="">None</option>
                        @for($i = idate('Y') ; $i > idate('Y')-20 ; $i--)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </span>
                <span class="search_element">
                    <label for="sort_by">Sort By</label>
                    <select class="form-control" id="sort_by" name="sort_by">
                        <option value="popular.desc" selected="selected">Popularity Descending</option>
                        <option value="popular.asc">Popularity Ascending</option>
                        <option value="avg_rate.desc">Rating Descending</option>
                        <option value="avg_rate.asc">Rating Ascending</option>
                        <option value="released_date.desc">Release Date Descending</option>
                        <option value="released_date.asc">Release Date Ascending</option>
                        <option value="name.asc">Title (A-Z)</option>
                        <option value="name.desc">Title (Z-A)</option>
                    </select>
                </span>
                <span class="search_element">
                    <label for="genre">Genre</label>
                    <select class="form-control" id="genre" name="genre">
                        <option value="" selected="selected">Filter by genres...</option>
                        @foreach($genres as $genre)
                        <option value="{{$genre['id']}}">{{$genre['name']}}</option>
                        @endforeach
                    </select>
                    </span>
                <span class="search_element">
                    <label for="keyword">Key Word</label>
                    <input class="form-control" id="keyword" name="keyword" placeholder="Filter by keywords..."
                           onkeypress="return noEnter(this)">
                    </span>
            </form>
        </div>
        <div id="discover_list"></div>
    </div>
</section>
@endsection
<script type="text/javascript" charset="utf-8">
    function submitForm(url = '/discover/movie') {
        $.ajax({
            url: url,
            type: 'GET',
            data: $('#discover_form').serialize()
        }).fail(function () {
            alert('There was a problem.');
        }).done(function (response) {
            $('#discover_list').html(response);
        });
    }

    window.onload = function () {
        submitForm();
        $('body').on('click', '.pagination a', function (e) {
            e.preventDefault();
            $('.data li').removeClass('active');
            $(this).parent('li').addClass('active');
            var page_no = $(this).attr('href').split('page=')[1];
            submitForm('/discover/movie?page=' + page_no);
            window.history.pushState("", "", url);
        });
    };

    function noEnter(ele) {
        if(window.event && window.event.keyCode === 13) ele.blur();
        return !(window.event && window.event.keyCode === 13);
    }
</script>