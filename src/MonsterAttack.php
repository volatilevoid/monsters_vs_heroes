<?php

namespace App;

use App\Interface\WeaponInterface;
use App\Interface\TakeDamageInterface;

class MonsterAttack implements WeaponInterface
{
    private string $attackname;
    private int $damage;

    public function __construct(string $name, int $damage)
    {
        $this->attackname = $name;
        $this->damage = $damage
    }

    public function makeDamage(TakeDamageInterface $wictim)
    {
        $wictim->takeDamage($this->damage);
    }

    public function getName(): string
    {
        return $this->attackname;
    }
}