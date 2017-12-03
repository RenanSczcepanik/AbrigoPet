<?php

namespace App\Http\Controllers\Back;
use App\Http\Requests\Back\RacaRequest;
use App\Http\Controllers\Controller;
use App\Models\Raca;

class RacasController extends Controller
{
  public function index()
  {
      $racas = Raca::paginate(10);

      return view('back.racas.index', compact('racas'));
  }

  /**
   * Show the raca create page.
   *
   * @return \Illuminate\Http\Response
   */

  public function create()
  {
      return view('back.racas.create');
  }

  /**
   * Show the raca store create.
   *
   * @param RacaRequest $request
   * @return \Illuminate\Http\Response
   */

  public function store(RacaRequest $request)
  {
      try {
           $raca = $request->all();
           Raca::create($raca);
          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.racas.index'));
  }

  /**
   * Show the raca edit page.
   *
   * @param Raca $raca
   * @return \Illuminate\Http\Response
   */
  public function edit(Raca $raca)
  {
      return view('back.racas.edit', compact('raca'));
  }

  /**
   * Show the raca edit page.
   *
   * @param raca $raca
   * @param RacaRequest $request
   * @return \Illuminate\Http\Response
   */
  public function update(Raca $raca, RacaRequest $request)
  {
      try {
          $id = $raca->id;
          Raca::find($id)->update($request->all());
          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.racas.index'));
  }

  /**
   * Show the raca edit page.
   *
   * @param Raca $raca
   * @return \Illuminate\Http\Response
   */
  public function destroy(Raca $raca)
  {
      try {
          $raca->delete();

          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.racas.index'));
  }
}
