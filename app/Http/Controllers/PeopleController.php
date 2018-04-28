<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;

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
}
