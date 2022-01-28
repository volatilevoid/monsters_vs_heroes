<?php

namespace App;

class Spider extends Monster
{
    public function __construct()
    {
        parent::__construct();
        $this->attackMethods = [
            'Melee' => new MonsterAttack('Melee', 5), 
            'Bite' => new MonsterAttack('Melee', 8)
        ];
    }
}