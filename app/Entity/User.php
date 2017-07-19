<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = ['first_name', 'last_name', 'is_active'];

    public function cars()
    {
        return $this->hasMany('App\Entity\Car');
    }
}
