<?php

namespace App\Http\Controllers;

use App\Denuncia;
use Illuminate\Http\Request;
use Carbon\Carbon;

class DenunciaController extends Controller {
	/**
	 * Create a new controller instance.
	 */
	public function __construct() {
		$this->middleware ( 'auth' );
	}
	
	/**
	 * Create/update una denuncia.
	 *
	 * @param Request $request        	
	 *
	 * @return Response
	 */
	public function store(Request $request) {
		$this->validate ( $request, [ 
				'denunciante_id' => 'required|max:255' 
		] );
		
		if ($request->id) {
			$denuncia = Denuncia::find ( $request->id );
		} else {
			$denuncia = new Denuncia ();
		}
		
		// Create denuncia...
		
		$denuncia->forma = $request->recepcionForma;
		$denuncia->tipo = $request->denunciaTipo;
		$denuncia->denunciante_id = $request->denunciante_id;
		$denuncia->denunciado_id = $request->denunciado_id;
		$denuncia->hecho_calificacion_legal = $request->inputClasifLegal;
		$denuncia->hecho_texto = $request->hechoTexto;
		$denuncia->acto_datetime = Carbon::createFromFormat('d/m/Y', ($request->actoFecha));
		$denuncia->acto_organismo = $request->actoOrganismo;
		$denuncia->acto_agente = $request->actoAgente;
		$denuncia->save ();
		
		return redirect ( '/denuncias' );
	}
	
	/**
	 * Display a list of all of the user's denuncia.
	 *
	 * @param Request $request        	
	 *
	 * @return Response
	 */
	public function index(Request $request) {
		$denuncias = Denuncia::orderBy ( 'created_at', 'asc' )->get ();
		
		return view ( 'denuncias.denuncia-material', [ 
				'denuncias' => $denuncias 
		] );
	}
	
	/**
	 * Destroy the given denuncia.
	 *
	 * @param Request $request        	
	 * @param Denuncia $denuncia        	
	 * @return Response
	 */
	public function destroy(Request $request, Denuncia $denuncia) {
		$denuncia->delete ();
		
		return redirect ( '/denuncias' );
	}
	
	/**
	 * get the given denuncia.
	 *
	 * @param Request $request        	
	 * @param Denuncia $denuncia        	
	 * @return Response
	 */
	public function get(Request $request, Denuncia $denuncia) {
		return view ( 'denuncias.denuncia-form', [ 
				'denuncia' => $denuncia 
		] );
	}
}
