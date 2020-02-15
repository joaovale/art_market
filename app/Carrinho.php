<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carrinho extends Model
{



// public function user()
//     {
//         return $this -> belongsTo(user::class);
//     }


    public function carrinho_has_obra()
    {
        return $this -> hasMany(Carrinho_has_obra::class);
    }

    public function user()
    {
        return $this -> hasOne(User::class);
    }

}

