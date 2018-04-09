@extends('layouts.default')

@section('title','Popular People')

@section('content')
<section class="bg-primary" id="popular">
    <div class="container">
        <h2 class="margin-top-1 margin-bottom-1 text-primary">Popular People</h2>
        @foreach($celebs as $celeb)
        <div class="col-sm-3 table-bordered people-item">
            <div class="col-sm-12" style="text-align:center;">
                <a href="/people/{{$celeb['id']}}">
                    <img src="@if(isset($celeb['img_path'])) {{$celeb['img_path']}} @else {{URL::asset('assets/person-placeholder.png')}} @endif"
                     alt="{{$celeb['name']}}" width="210" height="315">
                </a>
            </div>
            <div class="col-sm-12">
                <h4 style="text-align:center;">
                    <a class="text-primary" title="{{$celeb['name']}}"
                        href="/people/{{$celeb['id']}}">{{$celeb['name']}}</a></h4>
            </div>
        </div>
        @endforeach
    </div>
</section>
@endsection
