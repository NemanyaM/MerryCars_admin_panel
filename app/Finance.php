<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Finance extends Model
{
    use SoftDeletes;

    protected $dates = ['deleted_at'];
    protected $casts = [
        'for_rent' => 'integer'
    ];

    protected $fillable = [
        'contract_id'
        ,'for_rent'
        ,'us_for_decorations'
        ,'us_for_extras'
        ,'sum'
        ,'expenses_on_driver'
        ,'driver'
        ,'car_wash'
        ,'gas'
        ,'to_car_owner'
        ,'to_contractor'
        ,'for_decorations'
        ,'our_transfers'
        ,'sum_to_partners'
        ,'sum_to_us'
        ,'to_nastya'
        ,'to_company'
        ,'car'
        ,'event_date'
        ,'reserve_date'
        ,'our_car_earnings'
        ,'partner_car_earnings'
        ,'comments'
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }
}
