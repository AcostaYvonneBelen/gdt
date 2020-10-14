<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTurnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('turnos', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('derivacion_id')->unsigned();
            $table->integer('alumno_id')->unsigned();

            $table->integer('codturno');
            $table->date('fecha');
            $table->date('hora');
            $table->date('proxencuentro');
            $table->string('noconcurrio');
            $table->timestamps();

            //References

            $table->foreign('derivacion_id')->references('id')->on('derivacions')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
                   
            $table->foreign('alumno_id')->references('id')->on('alumnos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('turnos');
    }
}
