<?php

namespace App\Entity;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    protected $table = 'cars';
    protected $fillable = ['color', 'model', 'registration_number', 'year', 'mileage', 'price', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\Entity\User');
    }
}