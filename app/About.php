<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    protected $fillable = [
        'intro', 
        'aims', 
        'fees',
        'rates',
        'funding',
        'registration',
        'involvement',
        'policies'
    ];
}
