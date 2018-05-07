<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Celeb;

class SearchController extends Controller
{
    //
    public function searchByWord(Request $request)
    {
        $q = $request->q;
        $data_query_films = Film::where('name', 'LIKE', '%'.$q.'%')->take(7)->get();
        $data_query_celebs = Celeb::where('name', 'LIKE', '%'.$q.'%')->take(6)->get();
        $return_data = json_encode([$data_query_films, $data_query_celebs]);
        return $return_data;
    }


}
