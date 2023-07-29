<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

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
    protected $fillable = ['name', 'date', 'people', 'user_id', 'admin_id'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
