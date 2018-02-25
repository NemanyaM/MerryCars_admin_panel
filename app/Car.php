<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'car'
        ,'model'
        ,'plates'
        ,'our_price_no_season_workday'
        ,'our_price_no_season_weekend'
        ,'our_price_season_workday'
        ,'our_price_season_weekend'
        ,'partner_price_no_season_workday'
        ,'partner_price_no_season_weekend'
        ,'partner_price_season_workday'
        ,'partner_price_season_weekend'
        ,'owner'
        ,'phone'
        ,'bank_account'
    ];
}
