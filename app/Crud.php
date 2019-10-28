<?php
namespace App;
use Illuminate\Database\Eloquent\Model;
class Crud extends Model
{
    protected $fillable = [
    	'place', 'info','image','food','season','way'
    ];
}