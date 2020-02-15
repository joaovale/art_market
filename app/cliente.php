<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cliente extends Model
{
    protected $fillable = [
        'nome',
        'endereco',
        'numero',
        'obra_id'

    ];

    public function obra()
{
    return $this->belongsTo(obra::class);
}

}
