<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Adocao extends Model
{
  protected $fillable = [
      'dt_adocao', 'id_user', 'id_adotante', 'id_animal', 'adocao', 'dt_devolucao',
  ];
}
