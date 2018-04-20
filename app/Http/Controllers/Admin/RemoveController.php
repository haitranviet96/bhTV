<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 21/04/2018
 * Time: 00:40
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Film;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use League\Flysystem\Exception;

class RemoveController extends Controller
{
    public function index(Request $request)
    {
        if($request->ajax())
        {
            $id = Input::get('id');
            if($id == Null)
            {
                throw new Exception("Request ID not set");
            }
            if($id == 'film')
            {
                try
                {
                    $film_id = $request->input('film_id');
                    DB::table('actor_film')->where('film_id','=',''.$film_id.'')->delete();
                    DB::table('genre_film')->where('film_id','=',''.$film_id.'')->delete();
                    DB::table('director_film')->where('film_id','=',''.$film_id.'')->delete();
                    DB::table('films')->where('id','=',''.$film_id.'')->delete();
                } catch(Exception $e)
                {
                    echo $e->getMessage();
                }
            } else if ($id == 'celeb')
            {
                $celeb_id = $request->input('celeb_id');
                try
                {
                    DB::table('actor_film')->where('actor_id','=',''.$celeb_id.'')->delete();
                    DB::table('director_film')->where('dir_id','=',''.$celeb_id.'')->delete();
                    DB::table('celebs')->where('id','=',''.$celeb_id.'')->delete();
                } catch(Exception $e)
                {
                    echo $e->getMessage();
                }
            }
        } else throw new Exception("Not an ajax request!");
    }
}