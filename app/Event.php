<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $primaryKey = 'id';

    protected $fillable = [
        'car'
        ,'contract_id'
        ,'event_date'
        ,'driver'
        ,'time_to_deliver'
        ,'time_to_finish'
        ,'deliver_hours'
        ,'deliver_address'
        ,'contacts'
        ,'to_driver'
        ,'decorations'
        ,'comments'
    ];

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }

}
