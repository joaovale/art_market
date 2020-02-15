<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Endereco extends Model
{
    protected $fillable = [
        'cep',
        'rua',
        'numero',
        'complemento',
        'bairro',
        'cidade',
        'estado',
        'pais',
       'user_id'

];

// public function user()
//     {
//         return $this -> belongsTo(user::class);
//     }


public function users()
    {
        return $this -> belongsToMany(User::class);
    }
}
