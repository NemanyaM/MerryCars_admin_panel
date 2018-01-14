<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Car extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'partner'
        ,'car'
        ,'model'
        ,'plates'
        ,'location'
        ,'price'
        ,'price_per_hour'
        ,'condition'
        ,'start_date'
        ,'end_date'
    ];
}
