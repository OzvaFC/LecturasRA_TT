<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Audio extends Model
{
	protected $table = 'audios';
    protected $fillable = [
    	'name', 'file', 'reading_id'
    ];
}
