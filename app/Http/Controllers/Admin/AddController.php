<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 10/04/2018
 * Time: 22:14
 */

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class AddController extends Controller
{
    private $request;

    public function __construct(
        Request $request
    )
    {
        $this->request = $request;
    }

    public function addFilm()
    {
        $name = $this->request->input('name');
        echo $name;
    }
}