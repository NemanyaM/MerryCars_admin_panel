<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('partner');
            $table->string('car');
            $table->string('plates');
            $table->string('time')->nullable();
            $table->string('plus_hours')->nullable();
            $table->string('model')->nullable();
            $table->string('address_deliver')->nullable();
            $table->string('address_pickup')->nullable();
            $table->string('price')->nullable();
            $table->string('discount')->nullable();
            $table->string('decorations')->nullable();
            $table->string('decorations_price')->nullable();
            $table->string('extras')->nullable();
            $table->string('pre_price')->nullable();
            $table->string('total_price')->nullable();
            $table->string('price_per_hour')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('car_location')->nullable();
            $table->string('time_to_wait')->nullable();
            $table->timestamp('date');
            $table->string('deleted_at')->nullable();
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
        Schema::dropIfExists('contracts');
    }
}
