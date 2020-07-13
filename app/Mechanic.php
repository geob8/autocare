<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;

class Mechanic extends Model
{
    protected $fillable = ['name'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
