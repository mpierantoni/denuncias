<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToPersonasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('personas', function (Blueprint $table) {
          $table->date('fecha_nacimiento');
          $table->string('domicilio');
          $table->string('localidad');
          $table->string('nacionalidad');
          $table->string('telefono')->nullable();
          $table->string('email')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('personas', function (Blueprint $table) {
        	$table->dropColumn('fecha_nacimiento');
        	$table->dropColumn('domicilio');
        	$table->dropColumn('localidad');
        	$table->dropColumn('nacionalidad');
        	$table->dropColumn('telefono');
        	$table->dropColumn('email');
        });
    }
}
