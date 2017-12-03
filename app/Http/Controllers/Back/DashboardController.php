<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Adocao;
use App\Models\Adotante;
use App\Models\Animal;
use App\Models\User;

class DashboardController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $adocaos = Adocao::paginate(10);
      $adotantes = Adotante::all();
      $animals = Animal::all();
      $users = User::all();
      return view('back.dashboard') -> with(compact('adocaos', 'adotantes', 'animals', 'users'));
    }
}
