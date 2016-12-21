<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Occupation extends Model
{
    public function characters()
    {
    	return $this->belongsTo('App\Character');
    }
}
