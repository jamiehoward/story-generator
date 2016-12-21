<?php

namespace App\Http\Controllers;

use Crew\Unsplash;
use Illuminate\Http\Request;

class StoryController extends Controller
{

	protected $data = [];

	public function __construct()
	{
		$this->data['backgroundImage'] = null;
	}

    public function index()
    {
    	$faker = \Faker\Factory::create();

    	$this->data['character'] = $faker;

    	$this->data['backgroundImage'] = 'https://source.unsplash.com/category/buildings/?atlanta';
    	$this->data['backgroundImage'] = null;

    	$this->data['stories'] = [];

    	return view('story', $this->data);
    }

    public function makeStory()
    {
    	$this->data['mainCharacter'] = factory(\App\Character::class)->make();
    	$this->data['setting'] = factory(\App\Setting::class)->make();

    	return view('stories.detail', $this->data);
    }

    protected function supportingCharacters($count = 3)
    {

    }
}
