<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Persona;
use DB;
use Response;

class PersonaController extends Controller {
	
	/**
	 * Create/update una persona.
	 *
	 * @param Request $request        	
	 *
	 * @return Response
	 */
	public function store(Request $request) {
		$this->validate ( $request, [ 
				'nombres' => 'required|max:255',
				'apellidos' => 'required|max:255' 
		] );
		
		$persona = new Persona ();
		
		$persona->dni = $request->dni;
		$persona->nombres = $request->nombres;
		$persona->apellidos = $request->apellidos;
		// $persona->fecha_nacimiento = $request->fecha_nacimiento;
		// $persona->domicilio = $request->domicilio;
		// $persona->ciudad = $request->ciudad;
		// $persona->nacionalidad = $request->nacionalidad;
		// $persona->telefono = $request->telefono;
		// $persona->email = $request->email;
		$persona->save ();
		
		return response ()->json ( $persona );
		// return response()->json(['name' => 'Abigail', 'state' => 'CA']);
	}
	
	/**
	 * Buscar persona por DNI.
	 *
	 * @param Request $request        	
	 * @return Response
	 */
	public function get(Request $request) {
		// Log::info("info");
		// Log::error("error");
		$dni = $request->dni;
		// echo $dni;
		// echo $request->data;
		$persona = DB::table ( 'personas' )->where ('dni',$dni)->first ();
		// return response()->json([
		// 'success' => 'true',
		// ]);
		// $persona = new Persona();
		// // $persona->dni = $request->dni;
		// return response()->json(null)->setCallback($request->input('callback'));
		// echo json_encode($request->"input(dni));
		return Response::json ( $persona );
		
		// return Response::json($request->input(dni));
		// return json(array(
		// 'success' => true,
		// 'data' => $persona
		// ));
		// $persona)->setCallback($request->input('callback'));
	}
	public function ajax(Request $request) {
		$msg = "This is a simple message.";
		return response ()->json ( array (
				'msg' => $msg 
		), 200 );
	}
}
