<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
   protected $table = "animals";
  protected $fillable = [
      'nome', 'rga', 'dt_nascimento', 'dt_resgate', 'aprox_idade', 'genero', 'tipo_deficiencia',
      'vacinado', 'castrado', 'tamanho', 'peso', 'temperamento', 'obs', 'id_raca', 'adotado',
  ];
  public function animals(){
      return $this->hasMany('App\Models\Adocao');
    }
}
