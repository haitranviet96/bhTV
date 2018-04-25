<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
use App\User;
use Auth;

class CommentController extends Controller
{
    public function getComments($film_id){
        $comments = Comment::where('film_id', '=', $film_id)->orderBy('id', 'desc')->get();
        foreach( $comments as $comment){
            $user_id = $comment->user_id;
            $user = User::where('id', '=', $user_id)->first();
            $user_name = $user->name;
            $comment['user_name'] = $user_name;
        }
        return $comments;
//
//        var_dump($comments);
//        exit;
    }

    public function addComment(Request $request){
        $user = Auth::user();
        $film_id = $request->film_id;
        $content = $request->comment;

        if(!Auth::check()){
            $check_login = 0;
            return json_encode(array("added" => $check_login));
        }else{
            $check_login = 1;
            $a_comment = new Comment();
            $a_comment->user_id = $user->id;
            $a_comment->film_id = $film_id;
            $a_comment->comment = $content;
            $a_comment->save();
            return json_encode(array("added" => $check_login, "user_name" =>$user->name));

        }
    }



}
