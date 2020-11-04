<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TssSample extends Model
{
    protected $fillable = [
        
        'model',
        'name',
        'imei',
        'sn',
        'tss'
    ];
}
