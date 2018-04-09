<?php

namespace App\Http\Controllers;

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
        $popular_films = Film::orderBy('popular', 'desc')->take(16)->get();
        return view('movie/discover')->with(['films' => $popular_films]);
    }
}
