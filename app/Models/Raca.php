<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Raca extends Model
{
  protected $fillable = [
      'nome', 'tamanhoMax', 'tamanhoMin', 'expect_vida',
  ];
  public function animals(){
      return $this->hasMany('App\Models\Animal');
    }
}
