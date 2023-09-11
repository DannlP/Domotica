<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIrrigationsTable extends Migration
{
    public function up()
    {
        Schema::create('irrigations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crop_id');
            $table->date('date');
            $table->time('time');
            $table->integer('duration');
            $table->float('water_amount');
            $table->timestamps();

            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('irrigations');
    }
}