<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Service extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name',
        'description',
        'price',
        'duration_minutes',
    ];

    //Banyak booking dimiliki oleh satu service
    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
