<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTraineraAlineacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trainera_alineacion', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_trainera')->unsigned();
            $table->foreign('id_trainera')->references('id')->on('trainera');
            $table->timestamp('fecha');
            $table->integer('id_alineacion')->unsigned();
            $table->foreign('id_alineacion')->references('id')->on('alineacion');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('trainera_alineacion');
    }
}
