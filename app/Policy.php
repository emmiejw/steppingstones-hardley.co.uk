<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Policy extends Model
{
    protected $fillables = [
        'policy_file'
    ];

    public function about(){
        return $this->belongsTo(About::class);
    }
    
}
