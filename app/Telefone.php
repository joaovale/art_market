<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [
        'numero',
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
