<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
class CreateDenunciasTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create ( 'denuncias', function (Blueprint $table) {
			$table->increments ( 'id' );
			$table->timestamps ();
			$table->bigInteger( 'numero' )->nullable ();
			$table->string ( 'forma' )->nullable ();
			$table->string ( 'tipo' )->nullable ();
			$table->string ( 'denunciante_id' );
			$table->string ( 'denunciado_id' )->nullable ();
			$table->datetime ( 'hecho_datetime' )->nullable ();
			$table->string ( 'hecho_calificacion_legal' )->nullable ();
			$table->longText ( 'hecho_texto' )->nullable ();
			$table->datetime ( 'acto_datetime' )->nullable ();
			$table->bigInteger ( 'acto_numero' )->nullable ();
			$table->string ( 'acto_agente' )->nullable ();
			$table->string ( 'acto_organismo' )->nullable ();
		} );
	}
	
	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop ( 'denuncias' );
	}
}
