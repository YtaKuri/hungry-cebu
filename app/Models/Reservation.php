<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;
    public function Customer()
    {
        return $this->belongsTo('App\Models\Customer');
    }

    public function Restaurant()
    {
        return $this->belongsTo('App\Models\Restaurant');
    }
}
