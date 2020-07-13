<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;

class Adviser extends Model
{
    protected $fillable = ['name'];

    public function bookings()
    {
        return $this->hasMany(Booking::class);
    }
}
