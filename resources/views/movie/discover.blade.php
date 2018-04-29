@extends('layouts.default')

@section('title','Discover Movies')

@section('content')
    <link type="text/css" rel="stylesheet" href="{{URL::asset('css/rating-star.css')}}">
    <section class="bg-primary" id="popular">
    <div class="container">
        <h2 class="margin-top-1 margin-bottom-1 text-primary">Discover Movies</h2>
        <div class="col-sm-12 margin-bottom-1" style="margin-bottom: 20px">
            <form id="discover">
                <span class="search_element">
                    <label for="year">Year</label>
                    <select class="form-control" id="year" name="primary_release_year">
                        <option value="0">None</option>
                        @for($i = idate('Y') ; $i > idate('Y')-20 ; $i--)
                        <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
                </span>
                <span class="search_element">
                    <label for="sort_by">Sort By</label>
                    <select class="form-control" id="sort_by" name="sort_by">
                        <option value="popularity.desc" selected="selected">Popularity Descending</option>
                        <option value="popularity.asc">Popularity Ascending</option>
                        <option value="vote_average.desc">Rating Descending</option>
                        <option value="vote_average.asc">Rating Ascending</option>
                        <option value="primary_release_date.desc">Release Date Descending</option>
                        <option value="primary_release_date.asc">Release Date Ascending</option>
                        <option value="title.asc">Title (A-Z)</option>
                        <option value="title.desc">Title (Z-A)</option>
                    </select>
                </span>
                <span class="search_element">
                    <label for="genre">Genre</label>
                    <input class="form-control" id="genre" name="genre" placeholder="Filter by genres...">
                    </input>
                </span>
                <span class="search_element">
                    <label for="keyword">Key Word</label>
                    <input class="form-control" id="keyword" name="keyword" placeholder="Filter by keywords...">
                    </input>
                </span>
            </form>
        </div>
        @foreach($films as $film)
        <div class="col-sm-6 table-bordered movie-item">
            <div class="col-sm-4">
                <img src="{{$film['img_path']}}"
                     alt="{{$film['name']}}" width="140" height="209">
            </div>
            <div class="col-sm-8">
                <h4><a title="{{$film['name']}}"
                       href="/movie/{{$film['id']}}">{{$film['name']}}</a></h4>
                <p>
                    @if($film['mat_rate'] != "")
                    @php ($mat_rate = $film['mat_rate'])
                    <img title="{{$mat_rate}}" alt="Certificate {{$mat_rate}}"
                         src="<?php echo(URL::asset('assets/' . $mat_rate . '.png')) ?>"/>
                    @endif
                    <time>{{$film['length']}} min</time>
                    <span>-</span>
                    <?php
                    $genres = $film->genres;
                    foreach ($genres as $genre) {
                        if (!($genre == $genres['0']))
                            echo ' | ';
                        echo $genre['name'];
                    } ?></p>
                <div class="rating_small" id="rate_box_{{$film['id']}}">
                    @for($i = 0 ; $i < 10 ; $i++)<span>☆</span>@endfor
                </div>
                <div>&nbsp;{{$film['avg_point']}}/10</div>
                <p>@if(strlen($film['description'])>200) {{substr($film['description'],0,200)}}...
                    @else {{$film['description']}}@endif</p>
                <h5>Director:
                    <a class="text-primary" href="/people/{{$film->directors[0]['id']}}">
                        {{$film->directors[0]['name']}}</a></h5>
                <h5>Stars:
                    @php ($i = 0)
                    @foreach ($film->actors as $actor)
                    <a class="text-primary" href="/people/{{$actor['id']}}">{{$actor['name']}}</a>
                    @if (++$i == 3) @break @else, @endif
                    @endforeach
                </h5>
                @if(isset($film['trailer_path']))
                <a href="{{$film['trailer_path']}}" class="btn btn-default">Watch Trailer</a>
                @endif
                <a href="" title="Click to add to watchlist" class="btn btn-default">Add to Watchlist</a>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection