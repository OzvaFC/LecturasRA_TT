<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    protected $table='readings';
    protected $fillable = [
    	'name', 'description', 'image'
    ];
}
