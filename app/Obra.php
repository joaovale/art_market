<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Obra extends Model
{

    // protected $guarded = [];

    protected $fillable = [
        'nome',
        'sobre',
        'foto',
        'preco',
        'tamanho',
        'data_criacao',
        'estoque',
        'artista_id',
        'categoria_id',
        'estilo_id',
        'itemPedido_id'

];



    public function artista()
    {
        return $this -> belongsTo(Artista::class);
    }

    public function categoria()
    {
        return $this -> belongsTo(Categoria::class);
    }

    public function estilo()
    {
        return $this -> belongsTo(Estilo::class);
    }

    public function itemDoPedido()
    {
        return $this -> belongsTo(ItemDoPedido::class);
    }

    public function users()
    {
        return $this -> belongsToMany(User::class)->withTimestamps();
    }

}
