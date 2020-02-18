<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Band extends Model
{
    protected $guarded = [];
	
    public function songs()
    {
    	return $this->hasMany(Song::class);
    }
}
