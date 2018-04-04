<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SearchController extends Controller
{
    //
    public function test()
    {
        if (isset($_GET['search'])) {
            $response = "<ul><li>No data found</li></ul>";
            $connection = new mysqli('localhost', 'root', '', 'countries');
            $q = $connection->real_escape_string($_GET['q']);
            $sql = $connection->query("SELECT name FROM country WHERE name LIKE '%$q%'");
            if ($sql->num_rows > 0) {
                $response = "<ul>";
                while ($data = $sql->fetch_array())
                    $response .= "<li class='sug_row'>
             <img src='http://www.html.am/images/samples/remarkables_queenstown_new_zealand-300x225.jpg' class='img_sug'>
<a style='cursor: pointer;' href='https://google.com'>" . $data['name'] . "</a>

</li>";
                $response .= "</ul>";
            }
            exit($response);
        }
    }

}
