<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $guarded = ['id'];
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function masyarakat()
    {
        return $this->hasOne(Masyarakat::class, 'user_id');
    }

    public function petugas()
    {
        return $this->hasOne(Petugas::class, 'user_id');
    }
}
