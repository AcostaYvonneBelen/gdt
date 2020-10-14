<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->increments('id');
            
            $table->integer('sexo_id')->unsigned();
            $table->integer('tipdoc_id')->unsigned();
            $table->integer('orienvocrec_id')->unsigned();
            $table->integer('estadocivil_id')->unsigned();
            $table->integer('reltrabcarr_id')->unsigned();
            $table->integer('colegio_id')->unsigned();
            $table->integer('titulosec_id')->unsigned();
            $table->integer('situacionlab_id')->unsigned();            
            $table->integer('padre_id')->unsigned();
            $table->integer('madre_id')->unsigned();
            $table->integer('tiporeciden_id')->unsigned();
            $table->integer('nacionalidad_id')->unsigned();
            
        
            $table->integer('nrodoc');
            $table->string('apalum');
            $table->string('nomalum');
            $table->string('sangrefactor');
            $table->string('email');
            $table->date('fchnac');
            $table->integer('anio_egre_sec');
            $table->integer('t_proc');
            $table->timestamps();

            //References

            $table->foreign('sexo_id')->references('id')->on('sexos')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('tipdoc_id')->references('id')->on('tipo_docs')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('orienvocrec_id')->references('id')->on('orien_voc_recs')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('estadocivil_id')->references('id')->on('estado_civils')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('reltrabcarr_id')->references('id')->on('rel_trab_carrs')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('colegio_id')->references('id')->on('colegios')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('titulosec_id')->references('id')->on('titulo_secs')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('situacionlab_id')->references('id')->on('situacion_labs')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('padre_id')->references('id')->on('padres')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('madre_id')->references('id')->on('madres')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('tiporeciden_id')->references('id')->on('tipo_recidens')
                    ->onDelete('cascade')
                    ->onUpdate('cascade');
            $table->foreign('nacionalidad_id')->references('id')->on('nacionalidads')
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
        Schema::dropIfExists('alumnos');
    }
}
