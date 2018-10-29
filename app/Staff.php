<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name', 
        'role', 
        'qualifications',
        'aboutMe',
        'photo',
        'commitee',
        'involvement',
        'policies'
    ];
}
