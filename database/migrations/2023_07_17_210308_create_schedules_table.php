<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchedulesTable extends Migration
{
    public function up()
    {
        Schema::create('schedules', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crop_id');
            $table->time('start_time');
            $table->time('end_time');
            $table->integer('duration');
            $table->string('days_of_week');
            $table->timestamps();

            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('schedules');
    }
}