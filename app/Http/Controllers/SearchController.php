<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function test(Request $request)
    {
        $q = $request->q;
        echo $q;

            $response = "<ul><li>No data found</li></ul>";
            $connection = new mysqli('localhost', 'root','','homestead');
            $sql = $connection->query("SELECT name, img_path FROM films WHERE name LIKE '%$q%' LIMIT 6");

            $response = "<ul id='ulSearch'>";
            $response .= "<li class='sug_row' style='font-size: larger; font-weight: bold; font-style: italic; color: DarkGray'>".'Films'."</li>";
            if($sql->num_rows > 0){
                while($data = $sql->fetch_array())
                    $response .= "<li class='sug_row'><img src='{$data['img_path']}' class='img_sug'><a style='cursor: pointer;' href='https://google.com'>".$data['name']."</a></li>";
            }
            $sql = $connection->query("SELECT name, img_path FROM celebs WHERE name LIKE '%$q%' LIMIT 6");
            $response .= "<li class='sug_row' style='font-size: larger; font-weight: bold; font-style: italic; color: DarkGray;' >".'Actors'."</li>";
            if($sql->num_rows > 0){
                while($data = $sql->fetch_array())
                    $response .= "<li class='sug_row'><img src='{$data['img_path']}' class='img_sug'><a style='cursor: pointer;' href='https://google.com'>".$data['name']."</a></li>";
            }
            $response .= "</ul>";
//            echo $response;





    }


}
