<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estilo extends Model
{
    protected $fillable = [
        'nome',
        'definicao'

];

    public function obras()
    {
        return $this -> hasMany(Obra::class);
    }
}
