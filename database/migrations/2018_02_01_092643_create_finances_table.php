<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFinancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('finances', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('contract_id');
            $table->string('for_rent');
            $table->string('us_for_decorations');
            $table->string('us_for_extras');
            $table->string('sum');
            $table->string('expenses_on_driver');
            $table->string('driver');
            $table->string('car_wash');
            $table->string('gas');
            $table->string('to_car_owner');
            $table->string('to_contractor');
            $table->string('for_decorations');
            $table->string('our_transfers');
            $table->string('sum_to_partners');
            $table->string('sum_to_us');
            $table->string('to_nastya');
            $table->string('to_company');
            $table->string('car');
            $table->string('event_date');
            $table->string('reserve_date');
            $table->string('our_car_earnings');
            $table->string('partner_car_earnings');
            $table->text('comments');
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
        Schema::dropIfExists('finances');
    }
}
