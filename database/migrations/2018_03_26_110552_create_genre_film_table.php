<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGenreFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_film', function (Blueprint $table) {
            $table->unsignedInteger('film_id');
            $table->unsignedInteger('genre_id');
//            $table->timestamps();
            $table->primary(['film_id', 'genre_id']);
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('genre_id')->references('id')->on('genres');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('genre_film');
    }
}
