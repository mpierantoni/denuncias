<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class PdfController extends Controller {
	public function github() {
		return \PDF::loadFile ( 'denuncias' )->stream ( 'github.pdf' );
	}
	
	public function denuncia() {
		return \PDF::loadView ( 'denuncias' )->stream ( 'github.pdf' );
	}
}
