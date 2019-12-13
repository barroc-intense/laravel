<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class purchases extends Model
{
    protected $fillable = ["user_id"];
    public function supplies() {
        return $this->belongsToMany(
            '\App\Supply',
            'purchasesrules',
            'purchase_id',
            'supply_id');
    }
}
