<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSmartphonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('smartphones', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('tss_sample_id');
            $table->unsignedBigInteger('avg_sleep_mode_id');
            $table->unsignedBigInteger('observation_id');

            $table->foreign('tss_sample_id')->references('id')->on('tss_samples');
            $table->foreign('avg_sleep_mode_id')->references('id')->on('avg_sleep_mode');
            $table->foreign('observation_id')->references('id')->on('observations');
            
            $table->boolean('esim')->default(false);
            $table->boolean('power_of_lock')->default(true);
        
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('smartphones');
    }
}
