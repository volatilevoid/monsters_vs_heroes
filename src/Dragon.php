<?php

namespace App;

class Dragon extends Monster
{
    public function __construct()
    {
        parent::__construct();
        $this->attackMethods = [
            'Melee' => new MonsterAttack('Melee', 5), 
            'Fire' => new MonsterAttack('Fire', 20)
        ];

    }
}