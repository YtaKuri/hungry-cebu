<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $fillable = [
        'name',
        'email',
        'number',
        'opening_hours',
        'address',
        'password',
        'store_img',
    ];

    use HasFactory;

    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
