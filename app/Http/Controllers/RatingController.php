<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use Auth;
use App\Rate;

class RatingController extends Controller
{
    //
    public function rate(Request $request){

        if(!Auth::check()){
            $command_code = 0;
            return json_encode(array("command_code" => $command_code, "rate_times" => 0, "avg_point" => 0));
        }
        else{
            $command_code = 1;
            $this->updateARate($request->film_id, $request->rate_point);
            $new_rate_info = $this->getRateInfoOfAFilm($request->film_id);
            return json_encode(array("command_code" => $command_code, "rate_times" => $new_rate_info['rate_times'], "avg_point" => $new_rate_info['avg_point']));
        }
    }
    public static function isUserRatedAFilm($film_id){
        $user = Auth::user();
        if(!Auth::check()){
            return 0;
        }
        $rates = Rate::where('film_id', '=', ''.$film_id.'')->where('user_id', '=',''.$user->id.'')->get();
        if($rates->count() == 0){
            return 0;
        }
        else{
            return $rates[0]['rate'];
        }
    }
    private function updateARate($film_id, $rate_point){
        $user = Auth::user();
        $rate_found = Rate::where('film_id', '=', $film_id)->where('user_id', '=', $user->id)->get();
        if($rate_found->count() > 0){
            //if user already rated this film, system only needs to modify the DB
            Rate::where('film_id', '=', $film_id)->where('user_id', '=', $user->id)->update(['rate'=>$rate_point]);
            }
        else{
            //never rate => create new
            $a_rate = new Rate();
            $a_rate->user_id = $user->id;
            $a_rate->film_id = $film_id;
            $a_rate->rate = $rate_point;
            $a_rate->save();
        }
        $this->updateNewAvarageRate($film_id);
//        $rate_found->save();
    }
    public static function getRateInfoOfAFilm($film_id){
        $film_rates = Rate::where('film_id', '=', $film_id)->get();
        $total_point = 0;
        if($film_rates->count() > 0){
            $rate_times = $film_rates->count();
            foreach($film_rates as $rate){
                $total_point = $total_point + $rate->rate;
            }
            $avg_point = (float) $total_point / (float) $rate_times;
            $avg_point_str = number_format((float)$avg_point, 2, '.', '');
        }
        else {
            $rate_times = 0;
            $avg_point = 0;
            $avg_point_str = '0';
        }
        return ['rate_times' => $rate_times, 'avg_point' => $avg_point_str];
    }
    public function updateNewAvarageRate($film_id){
        $rate_info = $this->getRateInfoOfAFilm($film_id);
        $film = Film::find($film_id);
        $film->avg_rate = $rate_info['avg_point'];
        $film->save();
    }
}
