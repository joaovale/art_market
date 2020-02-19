<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function artista()
    {
        return $this -> hasOne(Artista::class);
    }

    public function telefones()
    {
        return $this -> belongsTo(Telefone::class);
    }

    public function pedidos()
    {
        return $this -> belongsTo(Pedido::class);

    }

    public function obras()
    {
        return $this -> belongsToMany(Obra::class)->withTimestamps();

    }
}
