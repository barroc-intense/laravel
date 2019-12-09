<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leaseType extends Model
{
    protected $fillable = ["name", "period"];

    public function Leases()
    {
        return $this->hasMany('\App\Leases', 'leaseType_id');
    }
}
