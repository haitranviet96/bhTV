<?php

namespace App\Http\Controllers;
use App\Http\Controllers\RatingController;

use App\Film;
use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    /**
     * Show the Discover page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rate = new RatingController();
        $popular_films = Film::orderBy('popular', 'desc')->take(16)->get();
        foreach($popular_films as $a_film){
            $rating_info = $rate->getRateInfoOfAFilm($a_film['id']);
            $a_film['avg_point'] = $rating_info['avg_point'];
            $a_film['user_rated'] = $rate->isUserRatedAFilm($a_film['id']);
        }
        return view('movie/discover')->with(['films' => $popular_films]);
    }
}
