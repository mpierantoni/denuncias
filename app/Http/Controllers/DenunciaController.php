<?php

namespace App\Http\Controllers;

use App\Denuncia;
use App\Persona;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class DenunciaController extends Controller {
	
	/**
	 * Create a new controller instance.
	 */
	public function __construct() {
 		$this->middleware('auth', ['except' => 'template']);
	}
	
	/**
	 * Create/update una denuncia.
	 *
	 * @param Request $request        	
	 *
	 * @return Response
	 */
	public function store(Request $request) {
		Log::info ( 'Guardando denuncia', [ 
				$request->all () 
		] );
		
		$this->validate ( $request, [ 
			'denunciante_id' => 'required|max:255'
		]);
		
		if ($request->id) {
			$denuncia = Denuncia::find ( $request->id );
		} else {
			// Create denuncia...
			$denuncia = new Denuncia ();
		}
		
		
		$denuncia->tipo = $request->denunciaTipo;
		$denuncia->forma = $request->recepcionForma;
		$denuncia->denunciante_id = $request->denunciante_id;
		$denuncia->denunciado_id = $request->denunciado_id;
		$denuncia->hecho_datetime = Carbon::createFromFormat ( 'd/m/Y', ($request->hechoFecha) );
		$denuncia->hecho_localidad = $request->hechoLocalidad;
		$denuncia->hecho_calificacion_legal = $request->inputClasifLegal;
		$denuncia->hecho_texto = $request->hechoTexto;
		$denuncia->acto_datetime = Carbon::createFromFormat ( 'd/m/Y', ($request->actoFecha) );
		$denuncia->acto_localidad = $request->actoLocalidad;
		$denuncia->acto_organismo = $request->actoOrganismo;
		$denuncia->acto_agente = $request->actoAgente;
		$denuncia->save ();
	
		Log::info ( 'Denuncia creada, id:', [
				$denuncia->id
		] );
		$denunciante = Persona::find ( $denuncia->denunciante_id );
		return view ( 'denuncias.denuncia-form', [ 
				'denuncia' => $denuncia,
				'denunciante' => $denunciante 
		] );
	}
	
	/**
	 * Display a list of all of the user's denuncia.
	 *
	 * @param Request $request        	
	 *
	 * @return Response
	 */
	public function index(Request $request) {
		Log::info ( 'Listando denuncias' );
		$denuncias = Denuncia::orderBy ( 'created_at', 'asc' )->get ();
		
		return view ( 'denuncias.denuncias', [ 
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
	public function get(Request $request) {
		Log::info ( 'Listando denuncia id:', [ 
				$request->id 
		] );
		if ($request->id) {
			$denuncia = Denuncia::find ( $request->id );
			$denunciante = Persona::find ( $denuncia->denunciante_id );
			return view ( 'denuncias.denuncia-form', [ 
					'denuncia' => $denuncia,
					'denunciante' => $denunciante 
			] );
		}
		return redirect ( '/denuncias' );
	}

	/**
	 * Template de denuncia.
	 *
	 * @param Request $request        	
	 * @param Denuncia $denuncia        	
	 * @return Response
	 */
	public function template(Request $request) {
		Log::info ( 'Listando denuncia id:', [ 
				$request->id 
		] );
		if ($request->id) {
			$denuncia = Denuncia::find ( $request->id );
			$denunciante = Persona::find ( $denuncia->denunciante_id );
			return view ( 'denuncias.denuncia-template', [ 
					'denuncia' => $denuncia,
					'denunciante' => $denunciante 
			] );
		}
		return redirect ( '/denuncias' );
	}
}
