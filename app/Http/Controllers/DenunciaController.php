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
   * Create a new denuncia.
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

      // Create denuncia...

      $denuncia = new Denuncia();
      $denuncia->name = $request->name;
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
}
