<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 10/04/2018
 * Time: 21:14
 */

namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TokenInput extends Controller
{
    private $request;


    public function __construct(
        Request $request
    ){
        $this->request = $request;
    }
    public function getCelebs()
    {
        if($this->request->isMethod('get'))
        {
            $q = $this->request->input('q');
            $profile = DB::table('celebs')->select('id','name')->where('name','like','%'.$q.'%')->get();
            return $profile;
        }
        return null;
    }

    public function getFilms()
    {
        if($this->request->isMethod('get'))
        {
            $q = $this->request->input('q');
            $profile = DB::table('films')->select('id','name')->where('name','like','%'.$q.'%')->get();
            return $profile;
        }
        return null;
    }
}