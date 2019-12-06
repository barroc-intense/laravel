<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quotations extends Model
{
    protected $fillable = ['type', 'email', 'company_name', 'KVK'];
}
