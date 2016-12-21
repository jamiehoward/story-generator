<?php
namespace App\Database\Seeds;

use App\Character;
use Illuminate\Database\Seeder;

class CharactersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Character::class, 50)->create()->each(function($character){
	        // Assign traits
	        $availableAttributes = \App\Attribute::get();
	        $attributes = [];
	        for ($i=0;$i<rand(1,3);$i++) {
	            $attributes[] = $availableAttributes->random()->id;
	        }

	        $character->attributes()->attach($attributes);
        });
    }
}
