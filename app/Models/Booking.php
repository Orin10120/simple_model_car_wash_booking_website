<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Booking extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'user_id',
        'vehicle_id',
        'service_id',
        'booking_date',
        'booking_time',
        'status',
        'total_price',
    ];

    // Define relationships

    //Satu user bisa memiliki banyak booking
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //Satu vehicle bisa memiliki banyak booking
    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    //Satu service bisa memiliki banyak booking
    public function service()
    {
        return $this->belongsTo(Service::class);
    }
}
