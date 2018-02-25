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
            $table->timestamp('date');
            $table->string('name');
            $table->string('lastname');
            $table->string('middlename');
            $table->string('car');
            $table->string('model')->nullable();
            $table->string('plates');
            $table->string('time')->nullable();
            $table->string('plus_hours')->nullable();
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('phone')->nullable();
            $table->string('contact_person');
            $table->string('address_deliver')->nullable();
            $table->string('address_pickup')->nullable();
            $table->text('decorations')->nullable();
            $table->string('decorations_price')->nullable();
            $table->string('extras')->nullable();
            $table->string('total_price')->nullable();
            $table->string('pre_price')->nullable();
            $table->softDeletes('deleted_at');
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
