<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Booking extends Model
{
    protected $guarded = [];

    public function mechanic()
    {
        return $this->belongsTo(\App\Mechanic::class);
    }

    public function customer()
    {
        return $this->belongsTo(\App\Customer::class);
    }

    public function adviser()
    {
        return $this->belongsTo(\App\Adviser::class);
    }
}
