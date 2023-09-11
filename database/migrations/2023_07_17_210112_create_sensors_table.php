<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSensorsTable extends Migration
{
    public function up()
    {
        Schema::create('sensors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('crop_id');
            $table->string('type');
            $table->string('location');
            $table->timestamps();

            $table->foreign('crop_id')->references('id')->on('crops')->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::dropIfExists('sensors');
    }
}