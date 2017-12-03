<?php

namespace App\Http\Controllers\Back;
use App\Http\Requests\Back\AdocaoRequest;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Adocao;
use App\Models\Adotante;
use App\Models\Animal;
use App\Models\User;


class AdocaosController extends Controller
{
  public function index()
  {
      $adocaos = Adocao::paginate(10);
      $adotantes = Adotante::all();
      $animals = Animal::all();
      $users = User::all();
      return view('back.adocaos.index') -> with(compact('adocaos', 'adotantes', 'animals', 'users'));
  }

  public function show()
  {
      $adocaos = Adocao::paginate(10);
      $adotantes = Adotante::all();
      $animals = Animal::all();
      $users = User::all();
      return view('back.adocaos.abdicar') -> with(compact('adocaos', 'adotantes', 'animals', 'users'));
  }
  /**
   * Show the adocaos create page.
   *
   * @return \Illuminate\Http\Response
   */

  public function create()
  {
      return view('back.adocaos.create');
  }

  /**
   * Show the adocaos store create.
   *
   * @param AdocaoRequest $request
   * @return \Illuminate\Http\Response
   */

  public function store(AdocaoRequest $request)
  {
       try {
          $id_user = Auth::user()->id;
          $request->request->add(['id_user' => $id_user]);

          $adocao = $request->all();
          Adocao::create($adocao);

           flash(trans('messages.success'), 'success');
       } catch (\Exception $e) {
           flash(trans('messages.exception'), 'danger');
       }

      return redirect(route('back.adocaos.index'));
  }

  /**
   * Show the adocao edit page.
   *
   * @param Adocao $adocao
   * @return \Illuminate\Http\Response
   */
  public function edit(Adocao $adocao)
  {
      return view('back.adocaos.edit', compact('adocao'));
  }

  /**
   * Show the adocao edit page.
   *
   * @param Adocao $adocao
   * @param AdocaoRequest $request
   * @return \Illuminate\Http\Response
   */
  public function update(Adocao $adocao, AdocaoRequest $request)
  {
      try {
          $id = $adocao->id;
          Adocao::find($id)->update($request->all());
          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.adocaos.index'));
  }

  /**
   * Show the adocao edit page.
   *
   * @param Adocao $adocao
   * @return \Illuminate\Http\Response
   */
  public function destroy(Adocao $adocao)
  {
      try {
          $adocao->delete();

          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.adocaos.index'));
  }
}
