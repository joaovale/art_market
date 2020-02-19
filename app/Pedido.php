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
        'user_id'

];


public function user()
    {
        return $this -> belongsTo(User::class);
    }

}

