<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    protected $guarded = [];

    public function customer()
    {
        return $this->belongsTo(\App\customer::class);
    }
}
