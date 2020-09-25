<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cadastros extends Model
{
  protected $table= 'cadastro';

  protected $fillable = [
    'id', 'nome', 'email', 'telefone', 'created_ad', 'update_at',
  ];

  protected $keyType = 'string';
  protected $cast = [];

  public $timestamps= true;
}
