<?php

namespace App;

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
        return $this->belongsTo(Tsssample::class);
    }

    public function avgsleepmode()
    {
        return $this->belongsTo(Avgsleepmode::class);
    }

    public function observation()
    {
        return $this->belongsTo(observation::class);
    }

}
