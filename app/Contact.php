<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    
    protected $fillable = [
    	'fname', 'subject','phone','email','msg'
    ];
}
