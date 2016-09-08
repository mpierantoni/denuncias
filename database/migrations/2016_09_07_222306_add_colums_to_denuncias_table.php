<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumsToDenunciasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('denuncias', function (Blueprint $table) {
        	$table->string ( 'hecho_localidad' );
        	$table->string ( 'acto_localidad' );
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
        	$table->dropColumn('hecho_localidad');
        	$table->dropColumn('acto_localidad');
        });
    }
}
