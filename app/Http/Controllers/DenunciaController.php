<?php

namespace App\Http\Controllers;

use App\Denuncia;
use Illuminate\Http\Request;

class DenunciaController extends Controller
{
    /**
   * Create a new controller instance.
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Create/update a new denuncia.
   *
   * @param Request $request
   *
   * @return Response
   */
  public function store(Request $request)
  {
      $this->validate($request, [
          'name' => 'required|max:255',
      ]);

      if ($request->id) {
        $denuncia = Denuncia::find($request->id);
      }else {
        $denuncia = new Denuncia();
      }

      // Create denuncia...

      $denuncia->name = $request->name;
      $denuncia->denunciante_dni = $request->denunciante_dni;
      $denuncia->denunciante_nombres = $request->denunciante_nombres;
      $denuncia->id = $request->id;
      $denuncia->save();

      return redirect('/denuncias');
  }

  /**
   * Display a list of all of the user's denuncia.
   *
   * @param Request $request
   *
   * @return Response
   */
  public function index(Request $request)
  {
      $denuncias = Denuncia::orderBy('created_at', 'asc')->get();

      return view('denuncias.index', [
          'denuncias' => $denuncias,
      ]);
  }

    /**
   * Destroy the given denuncia.
   *
   * @param  Request  $request
   * @param  Denuncia  $denuncia
   * @return Response
   */
  public function destroy(Request $request, Denuncia $denuncia)
  {
      $denuncia->delete();

      return redirect('/denuncias');
  }

    /**
   * Edit the given denuncia.
   *
   * @param  Request  $request
   * @param  Denuncia  $denuncia
   * @return Response
   */
  public function get(Request $request, Denuncia $denuncia)
  {
      return view('denuncias.denuncia', [
          'denuncia' => $denuncia,
      ]);
  }
}
