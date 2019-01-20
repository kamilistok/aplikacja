<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{
    protected  $fillable = [
        'name', 'lastName', 'ZIPcode', 'city', 'street', 'buildingNumber', 'phoneNumber'
    ];
}
