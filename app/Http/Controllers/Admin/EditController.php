<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 06/04/2018
 * Time: 22:07
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use League\Flysystem\Exception;
use phpDocumentor\Reflection\Types\Null_;

class EditController {

    public function index(Request $request)
    {
        if($request->ajax())
        {
            $id = Input::get('id');
            if($id == Null)
            {
                throw new Exception("Request ID not set");
            }
            if($id == "film") {
                $film_id = $request->input('film_id');
                $name = $request->input('name');
                $released_date = $request->input('released_date');
                $description = $request->input('description');
                $img = $request->input('img');
                $trailer = $request->input('trailer');
                $length = $request->input('length');
                $rate = $request->input('rate');
                $mat = $request->input('mat');
                $directors[] = $request->input('directors');
                $casts[] = $request->input('casts');
                $genres[] = $request->input('genre');
                $roles[] = $request->input('roles');
                if ($film_id != '' && $name!= '' && $released_date != '' && $description != '' && $img != '' && $rate != '') {
                    try {
                        DB::table('films')->where('id','=',''.$film_id.'')->update([
                            'name' => $name,
                            'released_date' => $released_date,
                            'description' => $description,
                            'img_path' => $img,
                            'trailer_path' => $trailer,
                            'length' => $length,
                            'avg_rate' => $rate,
                            'mat_rate' => $mat,
                        ]);
                        DB::table('director_film')->where('film_id','=',''.$film_id.'')->delete();
                        DB::table('actor_film')->where('film_id','=',''.$film_id.'')->delete();
                        DB::table('genre_film')->where('film_id','=',''.$film_id.'')->delete();

                        foreach ($directors as $director) {
                            if (!empty($director)) {
                                foreach ($director as $dir) {
                                    if(!empty($dir)) {
                                        $id_director = DB::table('celebs')->select('id')->where('name', 'like', '%' . $dir . '%')->first()->id;
                                        DB::table('director_film')->where('film_id','=',''.$film_id.'')->insert([
                                            'dir_id' => $id_director,
                                            'film_id' => $film_id
                                        ]);
                                    }
                                }
                            }
                        }
                        foreach ($casts as $cast) {
                            if(!empty($cast)) {
                                for ($i = 0; $i < count($cast);$i++)
                                {
                                    if(!empty($cast[$i]))
                                    {
                                        $id_cast = DB::table('celebs')->select('id')->where('name', 'like', '%' . $cast[$i] . '%')->first()->id;
                                        DB::table('actor_film')->insert([
                                            'film_id' => $film_id,
                                            'actor_id' => $id_cast,
                                            'role' => $roles[0][$i]
                                        ]);
                                    }
                                }
                            }
                        }
                        foreach ($genres as $genre) {
                            if (!empty($genre)) {
                                foreach ($genre as $gen) {
                                    if(!empty($gen)) {
                                        $id_gen = DB::table('genres')->select('id')->where('name', 'like', '%' . $gen . '%')->first()->id;
                                        DB::table('genre_film')->insert([
                                            'film_id' => $film_id,
                                            'genre_id' => $id_gen
                                        ]);
                                    }
                                }
                            }
                        }
                    } catch (Exception $e) {
                        echo $e->getMessage();
                    }
                }
            }
        }
    }
    public function editFilm($id)
    {
        $film = Film::where('id', '=', ''.$id.'')->first();
        $film['released_date_str'] = substr($film['released_date']->toDateTimeString(),0,10);
        $roles = DB::table('actor_film')->select('actor_id','role')->where('film_id','=',''.$id.'')->get();
        $genres = array();
        $arrRoles = array();
        $arrCasts = array();
        $arrDirecs = array();
        $genres_id = DB::table('genre_film')->select('genre_id')->where('film_id','=',''.$id.'')->get();
        foreach ($genres_id as $genre_id)
        {
            $genre = DB::table('genres')->select('name')->where('id','=',''.$genre_id->genre_id.'')->get();
            $a = $genre[0]->name;
            array_push($genres,$a);
        }
        $film['genres'] = json_encode($genres);
        foreach ($roles as $role)
        {
            array_push($arrRoles,$role->role);
            $cast = DB::table('celebs')->select('name')->where('id','=',''.$role->actor_id.'')->get();
            array_push($arrCasts,$cast[0]->name);
        }
        $film['roles'] = json_encode($arrRoles);
        $film['casts'] = json_encode($arrCasts);
        $dirs_id = DB::table('director_film')->select('dir_id')->where('film_id','=',''.$id.'')->get();
        foreach ($dirs_id as $dir_id)
        {
            $director = DB::table('celebs')->select('name')->where('id','=',''.$dir_id->dir_id.'')->get();
            array_push($arrDirecs,$director[0]->name);
        }
        $film['directors'] = json_encode($arrDirecs);
        return view('admin.edit.film')->with(['film' => $film]);
    }
}
