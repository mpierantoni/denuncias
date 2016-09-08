<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Persona;
use Carbon\Carbon;
use DB;
use Response;
use Illuminate\Support\Facades\Log;

class PersonaController extends Controller {
	
	/**
	 * Create/update una persona.
	 *
	 * @param Request $request        	
	 *
	 * @return Response
	 */
	public function store(Request $request) {
		
		Log::info ( 'Guardando persona', [$request->all()] );
			
		$this->validate ( $request, [ 
				'dni' => 'required|max:255',
				'nombres' => 'required|max:255',
				'apellidos' => 'required|max:255' 
		] );
		
		$persona = new Persona ();
		
		$persona->dni = $request->dni;
		$persona->nombres = $request->nombres;
		$persona->apellidos = $request->apellidos;
		$persona->fecha_nacimiento = Carbon::createFromFormat ( 'd/m/Y', ($request->fecha_nacimiento) );
		$persona->domicilio = $request->domicilio;
		$persona->localidad = $request->localidad;
		$persona->nacionalidad = $request->nacionalidad;
		$persona->telefono = $request->telefono;
		$persona->email = $request->email;
		$persona->save ();
		
		return response ()->json ( $persona );
	}
	
	/**
	 * Buscar persona por DNI.
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function get(Request $request) {
		Log::info ( 'Recuperando persona', [$request->all()] );

		$dni = $request->dni;
		$persona = DB::table ( 'personas' )->where ('dni',$dni)->first ();
		
		//------------
		// Si persona es null llamar a servicio externo desde aca
		//------------
		return Response::json ( $persona );
	}
}
