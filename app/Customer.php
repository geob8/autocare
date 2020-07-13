<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $guarded = [];

    public function vehicle()
    {
        return $this->hasMany(\App\Vehicle::class);
    }

    public function booking()
    {
        return $this->hasMany(\App\Booking::class);
    }
}
