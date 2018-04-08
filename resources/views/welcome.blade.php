@extends('layouts.default')

@section('title','Movie Database')

@section('content')

<section class="bg-primary" id="popular">
    <div class="container">
        <div class="row">
            <h2 class="margin-top-1 text-primary">On Popular Nowadays</h2>
            <hr class="primary">
            <div class="pop_film">
                @for($i = 0 ; $i < 3 ; $i++)
                <div class="@switch($i)
                                @case(0)
                                    info-first
                                    @break
                                @case(1)
                                    info-second
                                    @break
                                @case(2)
                                    info-third
                                @endswitch">
                    @php ($film = $popular_films[$i])
                    @php ($actors = $film->actors)
                    <a href="/movie/{{$film['id']}}">
                        <img src="{{$film['img_path']}}" width="100%">
                    </a>
                    <a class="text" href="/movie/{{$film['id']}}">
                        <div class="bottom-left">
                            <h3 class="text">{{$film['name']}}</h3>
                            <p class="text">
                                {{$actors[0]['name']}},{{$actors[1]['name']}}
                            </p></div>
                    </a>
                </div>
                @endfor
            </div>
            <div class="pop_film">
                @for($i = 3 ; $i < 6 ; $i++)
                <div class="@switch($i)
                                @case(3)
                                    info-second
                                    @break
                                @case(4)
                                    info-third
                                    @break
                                @case(5)
                                    info-first
                                @endswitch">
                    @php ($film = $popular_films[$i])
                    @php ($actors = $film->actors)
                    <a href="/movie/{{$film['id']}}">
                        <img src="{{$film['img_path']}}" width="100%">
                    </a>
                    <a class="text" href="/movie/{{$film['id']}}">
                        <div class="bottom-left">
                            <h3 class="text">{{$film['name']}}</h3>
                            <p class="text">
                                {{$actors[0]['name']}},{{$actors[1]['name']}}
                            </p></div>
                    </a>
                </div>
                @endfor
            </div>
        </div>
    </div>
</section>
<section class="two">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="margin-top-0 text-primary">Up Coming Movies</h2>
                <hr class="primary">
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            @foreach($recent_films as $film)
            <div class="col-lg-4 col-md-4 text-center">
                <div class="feature">
                    <a href="/movie/{{$film['id']}}">
                        <img src="{{$film['img_path']}}" width="300px" height="400px">
                    <h3 class="text">{{$film['name']}}</h3>
                    </a>
                    @php ($directors = $film->directors)
                    @foreach ($directors as $director)
                    <a href="/celeb/{{$director['id']}}">
                        <p class="text-muted">{{$director->name}}</p>
                    </a>
                    @endforeach
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
@endsection