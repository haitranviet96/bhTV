@extends('admin.partials.default')

@section('title','All Films')

@section('content')
    <section class="bg-primary" id="popular">
        <div class="container">
            <h2 class="margin-top-1 margin-bottom-1 text-primary">All Films<a href="{{route('addfilm')}}" title="Click to add film" class="btn btn-default" style="margin-left: 990px"><i class="fa fa-plus-circle"></i></a></h2>


            @foreach($films as $film)
                <div class="col-sm-6 table-bordered movie-item boxed" style="display: block;width: 100%">
                    <div class="col-sm-4">
                        <img src="{{$film['img_path']}}"
                             alt="{{$film['name']}}" width="140" height="209">
                    </div>
                    <div class="col-sm-8">
                        <h4><a title="{{$film['name']}}">{{$film['name']}}</a></h4>
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
                        <div class="rating">
                            @for($i = 0 ; $i < 10 ; $i++)<span>☆</span>@endfor
                        </div>
                        <div>&nbsp;{{$film['avg_rate']}}/10</div>
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
                        <a href="{{route('editFilm',['id'=>$film['id']])}}" title="Click to edit" class="btn btn-default btn-success">Edit</a>
                        <button  title="Click to remove" id="button_remove_film" class="btn btn-default btn-danger" value="{{$film['id']}}">Remove</button>
                    </div>
                </div>
            @endforeach
        </div>
        {{ $films->links() }}
    </section>
@endsection
