<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Admin extends Authenticatable
{
    use Notifiable, HasFactory;

    protected $fillable = [
        'name',
        'email',
        'number',
        'opening_hours',
        'address',
        'password',
        'store_img',
    ];

    public function reservations()
    {
        return $this->hasMany('App\Models\Reservation');
    }
}
