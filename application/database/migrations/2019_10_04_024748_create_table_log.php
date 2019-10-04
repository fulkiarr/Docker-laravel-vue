<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTableLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('log', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('site_id', '5');
            $table->double('pm25', '3');
            $table->double('pm10', '3');
            $table->double('co2', '3');
            $table->double('H2o', '3');
            $table->double('O2', '3');
            $table->double('humidity', '3');
            $table->boolean('door');
            $table->boolean('battery');
            $table->boolean('genset');
            $table->boolean('waterleak');
            $table->boolean('camera');
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
        Schema::dropIfExists('table_log');
    }
}
