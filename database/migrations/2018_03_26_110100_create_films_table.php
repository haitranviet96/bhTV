<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFilmsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('films', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name',255);
            $table->date('released_date');
            $table->text('description');
            $table->string('img_path',255)->nullable();
            $table->string('trailer_path',255)->nullable();
            $table->integer('length')->nullable();
            $table->float('avg_rate');
            $table->string('mat_rate',128)->nullable();
            $table->double('popular')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('films');
    }
}
