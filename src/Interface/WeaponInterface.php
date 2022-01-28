<?php

namespace App\Interface;

interface WeaponInterface
{
    public function makeDamage(TakeDamageInterface $wictim);
    public function getName(): string;
}