<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'name'
        ,'partner'
        ,'car'
        ,'model'
        ,'address_deliver'
        ,'address_pickup'
        ,'discount'
        ,'decorations'
        ,'price_per_hour'
        ,'email'
        ,'phone'
        ,'date'
        ,'time_to_wait'
        ,'car_location'
        ,'date'
    ];


    public function path()
    {
        return '/contract/' . $this->id;
    }


}
