<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Cita extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('citas', function (Blueprint $table) {
            $table->engine='InnoDB';
            $table->bigIncrements('id');
            $table->date('fecha');
            $table->time('hora');
            $table->string('estado',45);
            $table->bigInteger('id_veterinario')->unsigned();
            $table->bigInteger('id_cliente')->unsigned();
            $table->bigInteger('id_agenda')->unsigned();
            $table->string('observacion',45);
            $table->timestamps();

            $table->foreign('id_veterinario')->references('id')->on('veterinarios')->onDelete('cascade');
            $table->foreign('id_cliente')->references('id')->on('clientes')->onDelete('cascade');
            $table->foreign('id_agenda')->references('id')->on('agendas')->onDelete('cascade');
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
