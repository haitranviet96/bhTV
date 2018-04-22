<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 18/04/2018
 * Time: 09:29
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Film;

class MovieController extends Controller
{
    public function index()
    {
        $films = Film::orderBy('id', 'desc')->paginate(10);
        return view('admin/allfilms')->with(['films' => $films]);
    }
}
