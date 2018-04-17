<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Rate;

class RatingController extends Controller
{
    //
    public function rate(Request $request){
        if(!Auth::check()){
            $return_var = 0;
        }
        else{
            $return_var = 1;
            $this->updateARate($request->film_id, $request->rate_point);
        }
        return $return_var;
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
        }
        else {
            $rate_times = 0;
            $avg_point = 0;
        }
        return ['rate_times' => $rate_times, 'avg_point' => $avg_point];
    }
}
