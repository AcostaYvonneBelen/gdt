<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('padres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nrodocpadre');
            $table->string('nombpadre');
            $table->string('apepadre');
            $table->string('callepadre');
            $table->integer('nropadre');
            $table->integer('pisopadre');
            $table->integer('dtopadre');
            $table->integer('cppadre');
            $table->integer('tepadre');
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
        Schema::dropIfExists('padres');
    }
}
