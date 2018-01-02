<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $table = 'events';

    protected $primaryKey = 'id';

    protected $fillable = ['title','start_date','end_date'];

    public function contract()
    {
        return $this->belongsTo(Contract::class, 'contract_id', 'id');
    }

}
