<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patients extends Model
{
    protected  $fillable = [
        'name', 'lastName', 'ZIPcode','PESEL', 'city', 'street', 'buildingNumber', 'phoneNumber','card_id'
    ];

    public function card() {
        return $this->belongsTo(Cards::class, 'card_id');
    }
}
