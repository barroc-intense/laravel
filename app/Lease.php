<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lease extends Model
{

    public function user()
    {
        return $this->hasOne('\App\user', 'customer_id');
    }

    public function invoice()
    {
        return $this->hasMany('\App\invoice', 'lease_id');
    }

}
