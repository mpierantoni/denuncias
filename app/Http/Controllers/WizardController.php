<?php

namespace App\Http\Controllers;

use App\Denuncia;

use Illuminate\Http\Request;

use App\Http\Requests;

class WizardController extends Controller
{

  /**
   * Display a list of all of the user's denuncia.
   *
   * @param Request $request
   *
   * @return Response
   */
  public function wizardTomaTipo(Request $request)
  {
    $denuncia = new Denuncia();
    $denuncia->tipo_de_toma;
    $denuncia->tipo_de_toma = $request->tipo_de_toma;
    return view('denuncias.denuncia', [
        'denuncia' => $denuncia,
    ]);
  }
}
