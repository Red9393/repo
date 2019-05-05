<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlineacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alineacion', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name1');
            $table->string('name2');
            $table->string('name3');
            $table->string('name4');
            $table->string('name5');
            $table->string('name6');
            $table->string('name7');
            $table->string('name8');
            $table->string('name9');
            $table->string('name10');
            $table->string('name11');
            $table->string('name12');
            $table->string('name13');
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
        Schema::dropIfExists('alineacion');
    }
}
