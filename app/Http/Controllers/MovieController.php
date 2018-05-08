<?php

namespace App\Http\Controllers;

use App\Film;
use Illuminate\Http\Request;
use App\Rate;
use App\Genre;
use App\Celeb;
use App\Http\Controllers\RatingController;
use App\Http\Controllers\CommentController;
use DB;
use Illuminate\Support\Facades\Auth;

class MovieController extends Controller
{
    /**
     * Show the Popular page.
     *
     * @return \Illuminate\Http\Response
     */
    public function popular()
    {
        $popular_films = Film::orderBy('popular', 'desc')->paginate(16);
        return view('movie/popular')->with(['films' => $popular_films]);
    }

    /**
     * Show the Top Rated Movies page.
     *
     * @return \Illuminate\Http\Response
     */
    public function topRated()
    {
        $top_rated_films = Film::orderBy('avg_rate', 'desc')->paginate(16);
        return view('movie/top_rated')->with(['films' => $top_rated_films]);
    }

    /**
     * Show the Up Coming Movie page.
     *
     * @return \Illuminate\Http\Response
     */
    public function upComing()
    {
        $up_coming_films = Film::where('released_date', '>=',date('Y-m-d'))
        ->orderBy('released_date', 'desc')->paginate(16);
        return view('movie/up_coming')->with(['films' => $up_coming_films]);
    }

    /**
     * Show the Now Playing Movie page.
     *
     * @return \Illuminate\Http\Response
     */
    public function nowPlaying()
    {
        $now_playing_films = Film::where('released_date', '<',date('Y-m-d'))
            ->orderBy('released_date', 'desc')->paginate(16);
        return view('movie/now_playing')->with(['films' => $now_playing_films]);
    }

    public function filmInfo($id){
        $arr_genre_id = [];
        $arr_film_id = [];
        $rating = new RatingController();
        $film = Film::where('id', '=', ''.$id.'')->first();
        $date = substr($film['released_date']->toDateTimeString(),0,10);
        $film['released_date_str'] = $date;
        $p = $rating->isUserRatedAFilm($film['id']); // return the rating points
        $film['previous_rate'] =  $p; //previous rate of current user
        $rate_info = $rating->getRateInfoOfAFilm($film['id']);
        $film['rate_times'] = $rate_info['rate_times'];
        $genre_str = "";
        //get all genre of film
        $genre_film = DB::table('genre_film')->where('film_id', $film['id'])->get();
        $genre_name = Genre::all();
        foreach($genre_film as $a_genre_film){
            $genre_id = $a_genre_film->genre_id;
            foreach($genre_name as $genre){
                if($genre->id == $genre_id){
                    $genre_str = $genre_str.$genre->name.", ";
                }
            }
            array_push($arr_genre_id,$genre_id);
        }
        if(strlen($genre_str) >= 2)
            $genre_str[-2] = ' ';
        $film['genre']=$genre_str;
        //get comments for that film
        $comment_ins = new CommentController();
        $comments_of_film = $comment_ins->getComments($film['id']);
        //get list of actors for film
        $actor_list = array();
        $actors = DB::table('actor_film')->where('film_id', $film['id'])->get();
        foreach($actors as $actor){
            $an_actor = Celeb::where('id', '=', $actor->actor_id)->first();
            array_push($actor_list,$an_actor);
        }
        $film['actors'] = $actor_list;
        //get list of director for film
        $director_list = array();
        $directors = DB::table('director_film')->where('film_id', $film['id'])->get();
        foreach($directors as $director){
            $an_director = Celeb::where('id', '=', $actor->actor_id)->first();
            array_push($director_list,$an_director);
        }
        $film['directors'] = $director_list;

        $films_genre_id = DB::table('genre_film')->select('film_id')->whereIn('genre_id',$arr_genre_id)->inRandomOrder()->take(12)->get();
        foreach ($films_genre_id as $film_genre_id)
        {
            array_push($arr_film_id,$film_genre_id->film_id);
        }
        $suggest_films = Film::whereIn('id',$arr_film_id)->get();

        return view('movie/film_info')->with(['film' => $film, 'comment_query'=> $comments_of_film,'suggest_films' => $suggest_films]);
        }

    /**
     * Show films in Wishlist
     * return to view
     */
    public function showWishList($id)
    {
        $arr_film_id = [];
        $films_id = DB::table('wishlists')->select('film_id')->where([['user_id',$id]])->get();
        foreach($films_id as $film_id)
        {
            array_push($arr_film_id,$film_id->film_id);
        }
        $wishlists = Film::whereIn('id',$arr_film_id)->paginate(5);
        return view('movie/wishlist')->with(['wishlists'=>$wishlists]);
    }

    /**
     * Add film to wishlist db
     *
     */
    public function addToWishList(Request $request)
    {
            $film_id = $request->film_id;
            $user_id = $request->user_id;
            if(DB::table('wishlists')->where([['user_id',$user_id],['film_id',$film_id]])->exists())
            {
                $command_code = 1;
                return json_encode($command_code);

            } else {
                DB::table('wishlists')->insert([
                    'film_id' => $film_id,
                    'user_id' => $user_id,
                ]);
                $command_code = 2;
                return json_encode($command_code);
            }

    }

    /**
     * Remove film from wishlist db
     */
    public function removeFromWishList(Request $request)
    {
        $film_id = $request->film_id;
        $user_id = $request->user_id;
        DB::table('wishlists')->where([['user_id',$user_id],['film_id',$film_id]])->delete();
        $command_code = 1;
        return json_encode($command_code);
    }
}
