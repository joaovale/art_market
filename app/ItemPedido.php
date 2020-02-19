<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemPedido extends Model
{
    protected $fillable = [
        'valor_unitario',
        'quantidade',
        'pedido_id',
        'obra_id'

];



public function pedidos()
    {
        return $this -> belongsTo(Pedido::class);
    }

}
