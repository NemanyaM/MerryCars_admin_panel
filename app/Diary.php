<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Diary extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'reservation_date'
        , 'contract_id'
        , 'car'
        , 'event_date'
        , 'hours_amount'
        , 'hours_to_deliver'
        , 'decorations'
        , 'extras'
        , 'price_per_hour'
        , 'sum'
        , 'time_to_deliver'
        , 'address_to_deliver'
        , 'pre_paid'
        , 'amount_to_pay_owner'
        , 'amount_to_pay_contractor'
        , 'paid'
        , 'comments'
        , 'paid'
        , 'notification'
        , 'question'
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }

}
