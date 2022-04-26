<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Detaildate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('detaildate', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->increments('id');
            $table->string('description');
            $table->string('detail');
            $table->string('categoria');
            $table->integer('date_id')->unsigned();
            $table->timestamps();

            $table->foreign('date_id')->references('id')->on('date');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
