<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Avgsleepmode extends Model
{
    protected $fillable = [
        'sample_type',
        'measuring_form',
        'hw_version'
    ];
}
