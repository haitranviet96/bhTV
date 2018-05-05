<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 05/05/2018
 * Time: 21:37
 */

namespace App\Http\Controllers\Admin;

use App\ChartHelpers\FilmsChart;

class DashboardController
{
    public function index(FilmsChart $filmsChart)
    {
        $chartData = json_encode($filmsChart->chartDataFromAllRecords());

        return view('admin.dashboard')->with(['chartData'=>$chartData]);
    }
}