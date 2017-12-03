<?php

namespace App\Http\Controllers\Back;
use App\Http\Requests\Back\AdotanteRequest;
use App\Http\Controllers\Controller;
use App\Models\Adotante;
use App\Models\Endereco;

class AdotantesController extends Controller
{
  public function index()
  {
      $adotantes = Adotante::paginate(10);

      return view('back.adotantes.index', compact('adotantes'));
  }

  /**
   * Show the adotante create page.
   *
   * @return \Illuminate\Http\Response
   */

  public function create()
  {
      return view('back.adotantes.create');
  }

  /**
   * Show the adotants store create.
   *
   * @param AdotanteRequest $request
   * @return \Illuminate\Http\Response
   */

  public function store(AdotanteRequest $request)
  {
      try {

           $adotante = $request->all();
           Adotante::create($adotante);

          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.adotantes.index'));
  }

  /**
   * Show the adotante edit page.
   *
   * @param Contact $adotante
   * @return \Illuminate\Http\Response
   */
  public function edit(Adotante $adotante)
  {
      return view('back.adotantes.edit', compact('adotante'));
  }

  /**
   * Show the adotante edit page.
   *
   * @param Adotante $adotante
   * @param AdotanteRequest $request
   * @return \Illuminate\Http\Response
   */
  public function update(Adotante $adotante, AdotanteRequest $request)
  {
      try {
          $id = $adotante->id;
          Adotante::find($id)->update($request->all());
          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.adotantes.index'));
  }

  /**
   * Show the adotante edit page.
   *
   * @param Adotante $adotante
   * @return \Illuminate\Http\Response
   */
  public function destroy(Adotante $adotante)
  {
      try {
          $adotante->delete();

          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.adotantes.index'));
  }
}
