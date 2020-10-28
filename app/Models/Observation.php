<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Observation extends Model
{
    protected $fillable = [
        'best_hw',
        'cable_type',
        'hw_for_radio_test',
        'remarks'
    ];
}
