<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected  $fillable = [
        'name', 'lastName', 'ZIPcode','PESEL', 'city', 'street', 'buildingNumber', 'phoneNumber'
    ];

    public function card() {
        return $this->belongsTo(Card::class, 'patient_id');
    }
}
