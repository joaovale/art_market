<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho_has_obra extends Model
{
    protected $fillable = [
        'carrinho_id',
        'obra_id'

];

// public function user()
//     {
//         return $this -> belongsTo(user::class);
//     }


    public function obras()
    {
        return $this -> hasMany(Obra::class);
    }

    public function carrinho()
    {
        return $this -> hasOne(Carrinho::class);
    }

}
