<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = [
        'data_pedido',
        'data_entrega',
        'frete',
        'entrega',
        'user_id',
        'item_pedido_id'

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

