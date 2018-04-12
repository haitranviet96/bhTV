<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 10/04/2018
 * Time: 22:14
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Log;
use League\Flysystem\Exception;

class AddController extends Controller
{
    private $request;

    public function index(Request $request)
    {
        if ($request->ajax()) {
            $id = Input::get('id');

            if ($id == NULL) {
                throw new Exception("Request Id not set");
            }
            if ($id == "film") {
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
                if (!empty($name) && !empty($released_date) && !empty($description) && !empty($img) && !empty($rate)) {
                    try {
                        $id_film = DB::table('films')->insertGetId([
                            'name' => $name,
                            'released_date' => $released_date,
                            'description' => $description,
                            'img_path' => $img,
                            'trailer_path' => $trailer,
                            'length' => $length,
                            'avg_rate' => $rate,
                            'mat_rate' => $mat,
                        ]);
                        foreach ($directors as $director) {
                            if (!empty($director)) {
                                foreach ($director as $dir) {
                                    if(!empty($dir)) {
                                        $id_director = DB::table('celebs')->select('id')->where('name', 'like', '%' . $dir . '%')->first()->id;
                                        DB::table('director_film')->insert([
                                            'film_id' => $id_film,
                                            'dir_id' => $id_director
                                        ]);
                                    }
                                }
                            }
                        }
                        foreach ($casts as $cast) {
                            if(!empty($cast)) {
                                foreach ($cast as $profile) {
                                    if(!empty($profile)) {
                                        $id_cast = DB::table('celebs')->select('id')->where('name', 'like', '%' . $profile . '%')->first()->id;
                                        DB::table('actor_film')->insert([
                                            'film_id' => $id_film,
                                            'actor_id' => $id_cast
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
        } else throw new Exception("Not an ajax request!");
    }
}