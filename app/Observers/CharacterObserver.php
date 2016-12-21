<?php

namespace App\Observers;

use App\Character;

class CharacterObserver
{
    /**
     * Listen to the Character created event.
     *
     * @param  Character  $character
     * @return void
     */
    public function created(Character $character)
    {
        // Assign an occupation
        $occupation = \App\Occupation::get()->random();
        $character->occupation()->save($occupation);

        // Assign traits
        $availableAttributes = \App\Attribute::get();
        $attributes = [];
        for ($i=0;$i<rand(1,3);$i++) {
            $attributes[] = $availableAttributes->random();
        }

        $character->attributes()->save($attributes);
    }
}