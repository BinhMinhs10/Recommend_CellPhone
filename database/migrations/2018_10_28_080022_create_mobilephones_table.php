<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMobilephonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mobilephones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('name');
            $table->string('image');
            $table->float('screen_size');
            $table->float('camera_back');
            $table->float('camera_before');
            $table->string('OS');
            $table->float('CPU');
            $table->float('RAM');
            $table->integer('ROM');
            $table->integer('external_memory');
            $table->float('bluetooth');
            $table->float('height');
            $table->float('width');
            $table->float('depth');
            $table->integer('weight');
            $table->integer('battery');
            $table->integer('cost');
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
        Schema::dropIfExists('mobilephones');
    }
}
