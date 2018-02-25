<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contract_id');
            $table->string('reservation_date')->nullable();
            $table->string('car')->nullable();
            $table->string('event_date')->nullable();
            $table->string('hours_amount')->nullable();
            $table->string('hours_to_deliver')->nullable();
            $table->string('decorations')->nullable();
            $table->string('extras')->nullable();
            $table->string('price_per_hour')->nullable();
            $table->string('sum')->nullable();
            $table->string('time_to_deliver')->nullable();
            $table->string('address_to_deliver')->nullable();
            $table->string('pre_paid')->nullable();
            $table->string('amount_to_pay_owner')->nullable();
            $table->string('amount_to_pay_contractor')->nullable();
            $table->text('comments')->nullable();
            $table->string('paid')->nullable();
            $table->string('notification')->nullable();
            $table->text('question')->nullable();
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
        Schema::dropIfExists('diaries');
    }
}
