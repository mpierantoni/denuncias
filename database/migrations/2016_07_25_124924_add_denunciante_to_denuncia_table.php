<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddDenuncianteToDenunciaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('denuncias', function (Blueprint $table) {

          $table->string('forma');
          $table->string('tipo');
          $table->string('denunciante_persona');
          $table->string('denunciado_persona');
          $table->string('hecho_calificacion_legal');
          $table->longText('hecho_texto');
          $table->datetime('acto_datetime');
          $table->bigInteger('acto_numero');
          $table->string('acto_agente');
          $table->string('acto_organismo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('denuncias', function (Blueprint $table) {
            //
        });
    }
}
