<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Telefone extends Model
{
    protected $fillable = [
        'numero',
        'pais',
        'user_id'

];

public function users()
    {
        return $this -> belongsTo(User::class);
    }

}
