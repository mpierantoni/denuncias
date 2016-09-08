<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Log;

class PdfController extends Controller {

	public function pdf(Request $request) {
		Log::info ( 'Generando PDF para denuncia id:', [ 
				$request->id
		] );
		
		return \PDF::loadFile ( $request->root() . '/template?id=' . $request->id )->stream ( 'denuncia.pdf' );
	}
}
