<?php

namespace App;
use App\User;


use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
      protected $fillable = ['name', 'message', 'is_active'];
}


