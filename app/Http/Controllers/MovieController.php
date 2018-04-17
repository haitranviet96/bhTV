<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use App\Rate;
use App\Http\Controllers\RatingController;

class MovieController extends Controller
{
    /**
     * Show the Popular page.
     *
     * @return \Illuminate\Http\Response
     */
    public function popular()
    {
        $popular_films = Film::orderBy('popular', 'desc')->take(16)->get();
        return view('movie/popular')->with(['films' => $popular_films]);
    }

    /**
     * Show the Top Rated Movies page.
     *
     * @return \Illuminate\Http\Response
     */
    public function topRated()
    {
        $top_rated_films = Film::orderBy('avg_rate', 'desc')->take(16)->get();
        return view('movie/top_rated')->with(['films' => $top_rated_films]);
    }

    /**
     * Show the Up Coming Movie page.
     *
     * @return \Illuminate\Http\Response
     */
    public function upComing()
    {
        $up_coming_films = Film::where('released_date', '>=',date('Y-m-d'))
        ->orderBy('released_date', 'desc')->take(16)->get();
        return view('movie/up_coming')->with(['films' => $up_coming_films]);
    }

    /**
     * Show the Now Playing Movie page.
     *
     * @return \Illuminate\Http\Response
     */
    public function nowPlaying()
    {
        $now_playing_films = Film::where('released_date', '<',date('Y-m-d'))
            ->orderBy('released_date', 'desc')->take(16)->get();
        return view('movie/now_playing')->with(['films' => $now_playing_films]);
    }

    public function filmInfo($id){
        $rating = new RatingController();
        $film = Film::where('id', '=', ''.$id.'')->first();
    //        $film['released_date'] = date_format($film['released_date'],'Y-m-d');
    //        return gettype($film['released_date'].date());
//            var_dump($film['released_date']->toDateTimeString());exit;
        $date = substr($film['released_date']->toDateTimeString(),0,10);
        $film['released_date_str'] = $date;
        $p = $rating->isUserRatedAFilm($film['id']); // return the rating points
        $film['previous_rate'] =  $p; //previous rate of current user
        $rate_info = $rating->getRateInfoOfAFilm($film['id']);
//        var_dump($rate_info);
//        exit;

        $film['rate_times'] = $rate_info['rate_times'];
        $film['avg_point'] = $rate_info['avg_point'];
        return view('movie/film_info')->with(['film' => $film]);
        }
}
