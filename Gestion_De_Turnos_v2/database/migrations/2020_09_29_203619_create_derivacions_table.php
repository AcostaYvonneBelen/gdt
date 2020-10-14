<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDerivacionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('derivacions', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('docente_id')->unsigned();
            $table->integer('especialista_id')->unsigned();

            $table->string('descrp');
            $table->timestamps();

            //References

            $table->foreign('docente_id')->references('id')->on('docentes')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');

            $table->foreign('especialista_id')->references('id')->on('especialistas')
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
        Schema::dropIfExists('derivacions');
    }
}
