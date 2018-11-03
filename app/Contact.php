<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    protected $fillable = [
        'address_1', 
        'address_2',
        'City',
        'postcode',
        'phone', 
        'email',
    ];
}
