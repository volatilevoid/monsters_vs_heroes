<?php

namespace App\Interface;

interface MonsterInterface
{
    public function swithcAttack();
    public function attack(TakeDamageInterface $enemy);
    public function setCurrentAttack();

}