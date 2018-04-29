<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Film;
use App\Celeb;
use Illuminate\Http\Request;

class PeopleController extends Controller
{
    /**
     * Show the People page.
     *
     * @return \Illuminate\Http\Response
     */
    public function people()
    {
        $celebs = Celeb::orderBy('name', 'asc')->paginate(16);
        return view('people/people')->with(['celebs' => $celebs]);
    }
    public function person_info($id){
        $person = Celeb::where('id', '=', $id)->first();
        $list_film_join = $this->films_actor_participate($id);
        $person['films'] = $list_film_join;
        return view('people/person')->with(['person' => $person]);
    }
    private function films_actor_participate($actor_id){
        $actor_film = DB::table('actor_film')->where('actor_id', $actor_id)->get();
        $films = array();
        foreach ($actor_film as $item){
            $film = Film::where('id', '=', $item->film_id)->first();
            array_push($films,$film);
//            $film_name_str = $film_name_str.$film->name.", ";
        }
//        if(strlen($film_name_str) >= 2)
//        $film_name_str[-2] = ' ';
        return $films;
    }
}
