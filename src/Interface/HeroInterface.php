<?php

namespace App\Interface;

interface HeroInterface
{
    public function dropWeapon();
    public function takeWeapon(WeaponInterface $weapon);
    public function switchWeapon();
    public function attack(TakeDamageInterface $enemy);
}