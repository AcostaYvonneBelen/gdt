<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMadresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('madres', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('nrodocmadre');
            $table->string('nombmadre');
            $table->string('apemadre');
            $table->string('callemadre');
            $table->integer('nromadre');
            $table->integer('pisomadre');
            $table->integer('dtomadre');
            $table->integer('cpmadre');
            $table->integer('temadre');
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
        Schema::dropIfExists('madres');
    }
}
