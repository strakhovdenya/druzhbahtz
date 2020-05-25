<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrainingSchedulesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('training_schedules', static function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('period_id');
            $table->timestamp('day');
            $table->timestamp('ice_start')->nullable();
            $table->timestamp('ice_end')->nullable();
            $table->string('ice_place')->nullable();
            $table->timestamp('ground_start')->nullable();
            $table->timestamp('ground_end')->nullable();
            $table->timestamp('collecting_time')->nullable();
            $table->string('collecting_place')->nullable();
            $table->boolean('is_junior');
            $table->timestamps();

            $table->foreign('period_id')->references('id')->on('periods');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('training_schedules');
    }
}
