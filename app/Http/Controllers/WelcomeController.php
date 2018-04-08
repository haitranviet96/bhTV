<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    //

    /**
     * Show the application welcome page.
     *
     * @return \Illuminate\Http\Response
     */
    public function welcome()
    {
        $recent_films = Film::orderBy('released_date','desc')->take(3)->get();
        $popular_films = Film::orderBy('popular', 'desc')->take(6)->get();

        return view('welcome')->with(['popular_films' => $popular_films,
            'recent_films' => $recent_films]);
    }
}
