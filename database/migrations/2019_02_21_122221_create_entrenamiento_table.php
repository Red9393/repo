<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEntrenamientoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entrenamiento', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
            $table->foreign('id_usuario')->references('id')->on('users');
            $table->timestamp('fecha');
            $table->integer('id_actividad')->unsigned();
            $table->foreign('id_actividad')->references('id')->on('actividad');
            $table->integer('id_parametro')->unsigned();
            $table->foreign('id_parametro')->references('id')->on('parametros');
            $table->integer('id_unidad')->unsigned();
            $table->string('valor_parametro');
            $table->foreign('id_unidad')->references('id')->on('unidades');

            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entrenamiento');
    }
}
