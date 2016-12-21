<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    public function characters()
    {
    	return $this->hasMany('App\Character');
    }

    public function main_character()
    {
    	return $this->hasOne('App\Character', 'main_character_id');
    }

    public function villain()
    {
    	return $this->hasOne('App\Character', 'villain_id');
    }

    public function plot()
    {
        return $this->hasOne('App\Plot');
    }
}
