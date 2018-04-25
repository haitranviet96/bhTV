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
        $celebs = Celeb::orderBy('name', 'asc')->take(16)->get();
        return view('people/people')->with(['celebs' => $celebs]);
    }
}
