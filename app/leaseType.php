<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class leaseType extends Model
{
    protected $fillable = ["name", "period"];
}
