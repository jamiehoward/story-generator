<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{
    public function occupation()
    {
    	return $this->belongsTo('App\Occupation');
    }

    public function attributes()
    {
    	return $this->belongsToMany('App\Attribute');
    }
}
