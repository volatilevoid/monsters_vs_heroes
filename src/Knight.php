<?php

namespace App;

class Knight extends Hero
{
    public function __construct()
    {
        parent::__construct(100);
        $this->allowedWeapons = ['Sword', 'Spear'];
    }
}