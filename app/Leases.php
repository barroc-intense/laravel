<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leases extends Model
{

//    protected $fillable = ["name", "period"];
    public function leaseType()
    {
        return $this->belongsTo('\App\leaseType', 'leaseType_id');
    }
}
