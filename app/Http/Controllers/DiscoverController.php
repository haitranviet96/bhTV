<?php

namespace App\Http\Controllers;

use App\Genre;
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
        return view('movie/discover')->with(['genres' => Genre::all()]);
    }

    /**
     * Return list of filtered films.
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function filter(Request $request)
    {
        $year = $request->primary_release_year;
        $sortBy = $request->sort_by;
        $sort_key = explode(".", $sortBy);
        $genre = $request->genre;
        $keyword = $request->keyword;

        $sort_attr = $sort_key[0];
        $sort_detail = $sort_key[1];
        $query = Film::orderBy($sort_attr, $sort_detail);
        if (isset($year) && $year != 0) {
            $query->whereYear('released_date', '=', $year);
        }
        if (isset($genre)) {
            $query->whereHas('genres', function ($q) use ($genre) {
                $q->where('id', $genre); //this refers id field from categories table
            });
        }
        if (isset($keyword)) {
            $query->where('name', 'like', '%' . $keyword . '%');
        }

        $popular_films = $query->paginate(16);
        return view('movie.list')->with(['films' => $popular_films]);
    }
}
