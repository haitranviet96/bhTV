@extends('layouts.default')

@section('title','' . $person['name'] . '')

@section('content')
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<section class="bg-primary">
    <div class="container">
        <h2 class="margin-top-1 margin-bottom-1 text-primary">Actor Profile</h2>

        <div style="width: 40%; float:left;">
            <img src="{{$person['img_path']}}" class="img_bio_film">
        </div>
        <div style="width: 60%; float:right; ">
            <div>
                <p class="highlight_text">Name:</p>
                {{$person['name']}}
            </div>
            <div>
                <p class="highlight_text">Date of Birth:</p>
                {{$person['dob']}}
            </div>
            <div>
                <p class="highlight_text">Place of Birth:</p>
                {{$person['pob']}}
            </div>
            <div>
                @php
                    if($person['gender'] == 1)
                        $gender = "Female";
                    else
                        $gender = "Male";
                @endphp
                <p class="highlight_text">Gender:</p>
                {{$gender}}
            </div>
            <div>
                <p class="highlight_text">Short Description:</p>
                <p style="width: 650px; text-align: justify">{{$person['bio']}}</p>

            </div>
            <div>
                <p class="highlight_text">Films Join:</p>
                @php ($i = 0)
                @foreach ($person['films'] as $film)
                    <a style="color: cadetblue" href="/movie/{{$film['id']}}">{{$film['name']}}</a> <br>
                @endforeach
            </div>
        </div>

        <div style="clear:both; width:100%;"></div>
    </div>
</section>