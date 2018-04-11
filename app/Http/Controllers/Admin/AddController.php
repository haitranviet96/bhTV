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
use League\Flysystem\Exception;

class AddController extends Controller
{
    private $request;

    public function __construct(
        Request $request
    )
    {
        $this->request = $request;
    }

    public function index()
    {
        $id = $this->request->input('id');
        if(!empty($id))
        {
            throw new Exception("Request Id not set");
        }
        if($id == "film")
        {
            $name = $this->request->input('name');
            $released_date = $this->request->input('released_date');
            $description = $this->request->input('description');
            $img = $this->request->input('img');
            $trailer = $this->request->input('trailer');
            $length = $this->request->input('length');
            $rate = $this->request->input('rate');
            $mat = $this->request->input('mat');
            $directors[] = $this->request->input('directors');
            $casts[] = $this->request->input('casts');
            if(!isEmpty($name) && !isEmpty($released_date) && !isEmpty($description) && !isEmpty($img) && !isEmpty($rate))
            {
                try
                {
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
                    foreach ($directors as $director)
                    {
                        $id_director = DB::table('celebs')->select('id')->where('name','like','%'.$director.'%')->get();
                        DB::table('director_film')->insert([
                            'film_id' => $id_film,
                            'dir_id' => $id_director
                        ]);
                    }
                    foreach ($casts as $cast)
                    {
                        $id_cast = DB::table('celebs')->select('id')->where('name','like','%'.$cast.'%');
                        DB::table('actor_film')->insert([
                            'film_id' => $id_film,
                            'actor_id' => $id_cast
                        ]);
                    }
                } catch (Exception $e)
                {
                    echo $e->getMessage();
                }
            }
        }
    }
}