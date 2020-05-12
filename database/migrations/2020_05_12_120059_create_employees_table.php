<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('position',100);
            $table->timestamp('born');
            $table->timestamp('start_training');
            $table->smallInteger('game_number');
            $table->string('place_born',100);
            $table->string('place_study',100);
            $table->string('hand',100);
            $table->smallInteger('height');
            $table->smallInteger('weight');
            $table->string('image',250);
            $table->string('fav_team',150);
            $table->text('additional_info');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
