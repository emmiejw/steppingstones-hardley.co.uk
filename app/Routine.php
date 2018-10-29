<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Routine extends Model
{
    protected $fillable = [
        'daily_title', 
        'daily_time', 
        'daily_activity',
        'headings',
        'content',
        'title',
        'area',
        'description'
    ];
}
