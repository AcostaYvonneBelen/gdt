<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInscripcionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inscripcions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('carrera_id')->unsigned();
           
            $table->integer('alumno_id')->unsigned();

            $table->date('fchins');
            $table->integer('anioacad');
            $table->string('uniacad');
            $table->timestamps();

            //References

            $table->foreign('carrera_id')->references('id')->on('carreras')
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
        Schema::dropIfExists('inscripcions');
    }
}
