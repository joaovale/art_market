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
            1 =>'Compartilhar telefone',
            0 =>'Não compartilhar telefone',
        ][$attribute];
    }

    public function user()
    {
        return $this -> belongsTo(User::class);
    }

    public function obras()
    {
        return $this -> hasMany('App\Obra');
    }


}
