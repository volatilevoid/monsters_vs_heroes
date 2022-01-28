<?php

namespace App;

use App\Interface\InventoryInterface;
use App\Interface\WeaponInterface;
use Exception;

class Inventory implements InventoryInterface
{
    const MAX_ALLOWED_WEAPONS_NUM = 2;

    private array $weapons = [];

    function addWeapon(WeaponInterface $weapon)
    {
        if (count($this->weapons) === 2) {
            throw new Exception('Inventory full');
        }

        $this->weapons[] = $weapon;
    }

    public function removeWeapon(): WeaponInterface
    {
        if (count($this->weapons) === 0) {
            throw new Exception('No weapon in inventory.');
        }

        return array_shift($this->weapons);
    }
}