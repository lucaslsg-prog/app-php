<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tsssample extends Model
{
    protected $fillable = [
        
        'model',
        'name',
        'imei',
        'sn',
        'tss'
    ];
}
