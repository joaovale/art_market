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
        'estilo_id'

];

// public function user()
//     {
//         return $this -> belongsTo(user::class);
//     }

    public function carrinho_has_obra()
    {
        return $this -> belongsTo('App\Obra');
    }

    public function artista()
    {
        return $this -> belongsTo('App\Artista');
    }

    public function categoria()
    {
        return $this -> belongsTo(Categoria::class);
    }

    public function estilo()
    {
        return $this -> belongsTo(Estilo::class);
    }

    public function users()
    {
        return $this -> belongsToMany(User::class)->withTimestamps();
    }

}
