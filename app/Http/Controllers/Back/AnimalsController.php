<?php

namespace App\Http\Controllers\Back;
use App\Http\Requests\Back\AnimalRequest;
use App\Http\Controllers\Controller;
use App\Models\Animal;
use App\Models\Raca;

class AnimalsController extends Controller
{
  public function index()
  {
      $animals = Animal::paginate(10);
      return view('back.animals.index', compact('animals'));
  }

  /**
   * Show the animal create page.
   *
   * @return \Illuminate\Http\Response
   */

  public function create()
  {
      return view('back.animals.create');
  }

  /**
   * Show the animal store create.
   *
   * @param AnimalRequest $request
   * @return \Illuminate\Http\Response
   */

  public function store(AnimalRequest $request)
  {
       try {
           $adotado = 0;
           $request->request->add(['adotado' => $adotado]);
           $animal = $request->all();
           Animal::create($animal);

          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.animals.index'));
  }

  /**
   * Show the animal edit page.
   *
   * @param Animal $animal
   * @return \Illuminate\Http\Response
   */
  public function edit(Animal $animal)
  {
      return view('back.animals.edit', compact('animal'));
  }

  /**
   * Show the animal edit page.
   *
   * @param Animal $animal
   * @param AnimalRequest $request
   * @return \Illuminate\Http\Response
   */
  public function update(Animal $animal, AnimalRequest $request)
  {
      try {
          $id = $animal->id;
          Animal::find($id)->update($request->all());
          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.animals.index'));
  }

  /**
   * Show the animal edit page.
   *
   * @param Animal $animal
   * @return \Illuminate\Http\Response
   */
  public function destroy(Animal $animal)
  {
      try {
          $animal->delete();

          flash(trans('messages.success'), 'success');
      } catch (\Exception $e) {
          flash(trans('messages.exception'), 'danger');
      }

      return redirect(route('back.animals.index'));
  }
}
