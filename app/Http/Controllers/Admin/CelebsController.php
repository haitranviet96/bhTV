<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 18/04/2018
 * Time: 09:28
 */

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Celeb;

class CelebsController extends Controller
{
    public function index()
    {
        $celebs = Celeb::orderBy('id', 'desc')->paginate(10);
        return view('admin/allcelebs')->with(['celebs' => $celebs]);
    }
}