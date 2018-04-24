<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 22/04/2018
 * Time: 11:01
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class UsersController extends Controller
{
    public function index()
    {
        $users = DB::table('users')->paginate(10);
        return view('admin/allusers')->with(['users' => $users]);
    }

}