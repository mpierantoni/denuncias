<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('personas', function (Blueprint $table) {
          $table->increments('id');
          $table->timestamps();
          $table->string('dni')->unique();
          $table->string('nombres');
          $table->string('apellidos');
          // $table->date('fecha_nacimiento');
          // $table->string('domicilio');
          // $table->string('ciudad');
          // $table->string('nacionalidad');
          // $table->string('telefono');
          // $table->string('email');
      });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('personas');
    }
}
