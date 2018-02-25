<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contract_id');
            $table->integer('car');
            $table->string('event_date');
            $table->string('driver');
            $table->string('time_to_deliver');
            $table->string('time_to_finish');
            $table->string('deliver_hours');
            $table->string('deliver_address');
            $table->string('contacts');
            $table->string('to_driver');
            $table->string('decorations');
            $table->text('comments');
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
        Schema::dropIfExists('events');
    }
}
