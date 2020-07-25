<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeeDatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_datas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('employee_id');
            $table->string('favorite_activity', 250)->nullable();
            $table->string('favorite_cartoon', 250)->nullable();
            $table->string('favorite_book', 250)->nullable();
            $table->string('favorite_color', 250)->nullable();
            $table->string('most_in_hockey', 250)->nullable();
            $table->string('about_future', 250)->nullable();
            $table->string('dream', 250)->nullable();
            $table->timestamps();
            $table->foreign('employee_id')->references('id')->on('employees')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employee_datas');
    }
}
