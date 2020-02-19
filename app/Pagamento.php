<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
    protected $fillable = [

            'n_cartao',
            'nome',
            'codigo_seguranca',
            'pedido_id',

    ];

    public function pedidos()
    {
        return $this -> belongsTo(Pedido::class);
    }
}
