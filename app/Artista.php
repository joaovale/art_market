<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Artista extends Model
{
    protected $fillable = [
            'nome_artista',
            'portfolio',
            'mais_info',
            'compart_tel',
            'compart_email',
            'user_id',
            'obra_id'


    ];

     // pode ser usado o comando protected $guarded = [], para nao aceitar campo vazio


    public function getcompart_telAttribute($attribute)
    {
        return [

        ][$attribute];
    }

    public function user()
    {
        return $this -> belongsTo(User::class);
    }


}
