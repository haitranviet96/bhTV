<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 05/05/2018
 * Time: 21:37
 */

namespace App\Http\Controllers\Admin;

class DashboardController
{
    public function index()
    {
        return view('admin.dashboard');

    }
}