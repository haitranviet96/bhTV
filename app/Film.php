<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['released_date'];

    /**
     * The actors that belong to the film.
     */
    public function actors()
    {
        return $this->belongsToMany('App\Celeb','actor_film',
            'film_id','actor_id');
    }

    /**
     * The directors that belong to the film.
     */
    public function directors()
    {
        return $this->belongsToMany('App\Celeb','director_film',
            'film_id','dir_id');
    }

    /**
     * The genres that belong to the film.
     */
    public function genres()
    {
        return $this->belongsToMany('App\Genre','genre_film',
            'film_id','genre_id');
    }
}
