<?php

namespace App;

use App\Interface\WeaponInterface;
use App\Interface\TakeDamageInterface;

class Weapon implements WeaponInterface
{
    private string $name;
    private int $damage;

    public function __construct(string $name, int $damage)
    {
        $this->name = $name;
        $this->damage = $damage;
    }

    public function makeDamage(TakeDamageInterface $wictim)
    {
        $wictim->takeDamage($this->damage);
    }

    public function getName(): string
    {
        return $this->name;
    }

}