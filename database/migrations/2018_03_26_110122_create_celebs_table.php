<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCelebsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('celebs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->date('dob');
            $table->string('pob',255);
            $table->tinyInteger('gender')->default(1);
            $table->string('img_path',255);
            $table->text('bio');
//            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('celebs');
    }
}
