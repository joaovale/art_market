<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
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
