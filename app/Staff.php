<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Staff extends Model
{
    protected $fillable = [
        'name', 
        'role', 
        'qualifications_1',
        'qualifications_2',
        'qualifications_3',
        'aboutMe',
        'photo',
        'commitee',
    ];
}
