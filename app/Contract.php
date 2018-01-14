<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contract extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $guarded = [
        'name'
        ,'plates'
        ,'car'
        ,'model'
        ,'address_deliver'
        ,'address_pickup'
        ,'time'
        ,'plus_hours'
        ,'decorations'
        ,'decorations_price'
        ,'contact_person'
        ,'email'
        ,'phone'
        ,'date'
        ,'start_date'
        ,'end_date'
        ,'extras'
        ,'total_price'
        ,'pre_price'
        ,'date'
    ];

    use SoftDeletes;


    public function path()
    {
        return '/contract/' . $this->id;
    }


}
