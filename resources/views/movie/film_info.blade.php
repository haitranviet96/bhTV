@extends('layouts.default')
@section('title','Film Information')
@section('content')
    <section class="bg-primary">
        <h2 class="margin-top-1 margin-bottom-1 text-primary">Movie Profile</h2>

        <div style="width: 40%; float:left;">
            <img src="{{$film['img_path']}}" class="img_bio_film" >
        </div>
        <div style="width: 60%; float:right;">
            <p class="highlight_text">Film name:</p>
            {{$film['name']}}<br>
            <p class="highlight_text"> Released date:</p>
            {{$film['released_date']}}<br>
            <p class="highlight_text">Short description:</p>
            <p>{{$film['description']}}</p>
            <p class="highlight_text">Length:</p>
            {{$film['length']}} mins<br>
            <p class="highlight_text">Mature rate:</p>
            {{$film['mat_rate']}}<br>
        </div>
        <div style="width: 40%; clear:both">
            <p style="margin: auto">
                This is spent for rating box

            </p>
        </div>


    </section>
@endsection