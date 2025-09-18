<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'licence_plate',
        'model',
        'type',
        'color',
    ];

    //Banyak vehicle dimiliki oleh satu user
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Satu vehicle bisa memiliki banyak booking
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
