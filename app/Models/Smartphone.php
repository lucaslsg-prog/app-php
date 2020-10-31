<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Smartphone extends Model
{
    protected $fillable = [

        'tss_sample_id',
        'avg_sleep_mode_id',
        'observation_id',
        'esim',
        'power_of_lock'
        
    ];

    public function tsssample()
    {
        return $this->belongsToMany(Tsssample::class);
    }

    public function avgsleepmode()
    {
        return $this->belongsToMany(Avgsleepmode::class);
    }

    public function observation()
    {
        return $this->belongsToMay(Observation::class);
    }

}
