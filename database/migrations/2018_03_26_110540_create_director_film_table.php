<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectorFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('director_film', function (Blueprint $table) {
            $table->unsignedInteger('film_id');
            $table->unsignedInteger('dir_id');
//            $table->timestamps();
            $table->primary(['film_id', 'dir_id']);
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('dir_id')->references('id')->on('celebs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('director_film');
    }
}
