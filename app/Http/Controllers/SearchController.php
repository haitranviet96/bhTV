<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Film;
use App\Celeb;

class SearchController extends Controller
{
    //
    public function test(Request $request)
    {
        $q = $request->q;

            $response = "<ul><li>No data found</li></ul>";
            $data_query = Film::where('name', 'LIKE', '%'.$q.'%')->take(6)->get();
            $response = "<ul id='ulSearch'>";
            $response .= "<li class='sug_row' style='font-size: larger; font-weight: bold; font-style: italic; color: DarkGray'>".'Films'."</li>";
            if($data_query->count() > 0){
                foreach ($data_query as $data)
                    $response .= "<li class='sug_row'><img src='{$data->img_path}' class='img_sug'><a style='cursor: pointer;' href='/movie/film_info/{$data->id}'>".$data->name."</a></li>";
            }
            $data_query = Celeb::where('name', 'LIKE', '%'.$q.'%')->take(6)->get();
            $response .= "<li class='sug_row' style='font-size: larger; font-weight: bold; font-style: italic; color: DarkGray;' >".'Actors'."</li>";
            if($data_query->count() > 0){
                foreach ($data_query as $data)
                    $response .= "<li class='sug_row'><img src='{$data->img_path}' class='img_sug'><a style='cursor: pointer;' href='/movie/film_info/{$data->id}'>".$data->name."</a></li>";
            }
            $response .= "</ul>";
           return $response;

    }


}
