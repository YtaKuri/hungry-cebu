<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    use HasFactory;


    public function users()
    {
        return $this->belongsTo('App\Models\User');
    }

    public function admins()
    {
        return $this->belongsTo('App\Models\Admin');
    }
    protected $fillable = ['reservation_date', 'name', 'email', 'note','number_of_people'];

    protected $table = 'reservations';
}
