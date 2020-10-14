<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDptoPartidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dpto_partidos', function (Blueprint $table) {
            $table->increments('id');

            //$table->integer('provincia_id')->unsigned();
            $table->string('descrp');
            $table->timestamps();

            //References

            //$table->foreign('provincia_id')->references('id')->on('provincias')
              //      ->onDelete('cascade')
                //    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dpto_partidos');
    }
}
