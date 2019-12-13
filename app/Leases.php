<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leases extends Model
{

    protected $fillable = ["customer_id", "finance_id", "leaseType_id","KVK","BKR","appraat","price"];
    public function leaseType()
    {
        return $this->belongsTo('\App\leaseType', 'leaseType_id');
    }
}
