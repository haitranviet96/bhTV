<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateActorFilmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('actor_film', function (Blueprint $table) {
            $table->unsignedInteger('film_id');
            $table->unsignedInteger('actor_id');
            $table->string('role',255);
//            $table->timestamps();
            $table->primary(['film_id', 'actor_id']);
            $table->foreign('film_id')->references('id')->on('films');
            $table->foreign('actor_id')->references('id')->on('celebs');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('actor_film');
    }
}
