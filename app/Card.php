<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    protected  $fillable = [
        'patient_id', 'blood', 'addiction', 'medicines', 'diseases'
    ];
}
