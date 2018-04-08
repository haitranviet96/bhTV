<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiscoverController extends Controller
{
    /**
     * Show the Discover page.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('discover');
    }
}
