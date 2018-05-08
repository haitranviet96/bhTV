@foreach($films as $film)
<div class="col-sm-6 table-bordered movie-item">
    <div class="col-sm-4">

        <img src="@if(isset($film['img_path'])) {{$film['img_path']}}
                @else
                <?php echo(URL::asset('assets/movie-placeholder.png')) ?>
                @endif"
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
            @if(isset($film['length']))
            <time>{{$film['length']}} min</time>
            <span>-</span>
            @endif
            <?php
            $genres = $film->genres;
            foreach ($genres as $genre) {
                if (!($genre == $genres['0']))
                    echo ' | ';
                echo $genre['name'];
            } ?></p>
        <div>Avarage rating: {{$film['avg_rate']}}/10</div>
        <p>@if(strlen($film['description'])>200) {{substr($film['description'],0,200)}}...
            @else {{$film['description']}}@endif</p>
        @if(isset($film->directors[0]))
        <h5>Director:
            <a class="text-primary" href="/people/{{$film->directors[0]['id']}}">
                {{$film->directors[0]['name']}}</a></h5>
        @endif
        
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
@if(count($films) == 0)
<p>No results found.</p>
@endif
<div style="width: 50%; margin: 0 auto;">{{ $films->links() }}</div>