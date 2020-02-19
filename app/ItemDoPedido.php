<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ItemDoPedido extends Model
{
    protected $fillable = [
        'valor_unitario',
        'quantidade',
        'pedido_id',
        'obra_id'

];



public function pedido()
    {
        return $this -> belongsTo(Pedido::class);
    }

}
