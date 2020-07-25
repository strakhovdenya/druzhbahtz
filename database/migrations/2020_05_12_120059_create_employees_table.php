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
        Schema::create('employees', static function (Blueprint $table) {
            $table->id();
            $table->string('name',100);
            $table->string('position',100);
            $table->timestamp('born');
            $table->timestamp('start_training');
            $table->string('game_number',2);
            $table->string('place_born',100);
            $table->string('place_study',100);
            $table->string('hand',100);
            $table->smallInteger('height');
            $table->smallInteger('weight');
            $table->string('image',250)->nullable();
            $table->string('fav_team',150);
            $table->unsignedBigInteger('team_id');
            $table->softDeletes();
            $table->timestamps();

            $table->foreign('team_id')->references('id')->on('teams')->onDelete('cascade');
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
