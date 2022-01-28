<?php

namespace App;

class Wizard extends Hero
{
    public function __construct()
    {
        parent::__construct(150);
        $this->allowedWeapons = ['Magic'];
    }
}