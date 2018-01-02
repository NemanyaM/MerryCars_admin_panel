<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCarsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cars', function (Blueprint $table) {
            $table->increments('id');
            $table->string('car_name');
            $table->string('car_model');
            $table->string('partner');
            $table->string('location');
            $table->string('price_fixed')->nullable();
            $table->string('price_per_hour')->nullable();
            $table->timestamp('busy_from')->nullable();
            $table->timestamp('free_from')->nullable();
            $table->string('address_deliver');
            $table->string('deleted_at');
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
        Schema::dropIfExists('cars');
    }
}
