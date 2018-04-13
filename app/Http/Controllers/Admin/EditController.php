<?php
/**
 * Created by PhpStorm.
 * User: bao
 * Date: 06/04/2018
 * Time: 22:07
 */
namespace App\Http\Controllers\Admin;

use Illuminate\Support\Facades\DB;

class EditController {

    public function index(){
        $id = DB::table('films')->insertGetId([
            'name' => 'mr robot',
            'released_date' => '',
            'description' => $description,
            'img_path' => $img,
            'trailer_path' => $trailer,
            'length' => $length,
            'avg_rate' => $rate,
            'mat_rate' => $mat,
        ]);
    }

}
