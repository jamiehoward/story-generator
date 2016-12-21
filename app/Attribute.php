<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    public function characters()
    {
    	return $this->belongsToMany('App\Character');
    }
}
