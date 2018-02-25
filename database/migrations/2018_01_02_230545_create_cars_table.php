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
            $table->string('car');
            $table->string('model')->nullable();
            $table->string('plates')->nullable();
            $table->string('our_price_no_season_workday')->nullable();
            $table->string('our_price_no_season_weekend')->nullable();
            $table->string('our_price_season_workday')->nullable();
            $table->string('our_price_season_weekend')->nullable();
            $table->string('partner_price_no_season_workday')->nullable();
            $table->string('partner_price_no_season_weekend')->nullable();
            $table->string('partner_price_season_workday')->nullable();
            $table->string('partner_price_season_weekend')->nullable();
            $table->string('owner')->nullable();
            $table->string('phone')->nullable();
            $table->string('bank_account')->nullable();
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
        Schema::dropIfExists('cars');
    }
}
