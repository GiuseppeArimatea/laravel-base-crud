<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Videogame extends Model
{
    protected $fillable = [
      'Titolo',
      'Casa Produttrice',
      'Codice',
      'Prezzo',
      'Titolo'
    ];
}
