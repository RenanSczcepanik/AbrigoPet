<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
class Adotante extends Model
{
  protected $fillable = [
      'nome', 'fone_fixo', 'fone_celular', 'email', 'rua', 'bairro', 'cidade', 'estado', 'cep', 'numero', 'impedimento',
  ];
  public function animals(){
      return $this->hasMany('App\Models\Adocao');
    }
}
