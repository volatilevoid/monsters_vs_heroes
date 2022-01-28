<?php

namespace App\Interface;

interface InventoryInterface
{
    public function addWeapon(WeaponInterface $weapon);
    public function removeWeapon(): WeaponInterface;
}