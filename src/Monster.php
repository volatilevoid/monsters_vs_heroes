<?php

namespace App;

use App\Interface\IsAliveInterface;
use App\Interface\MonsterInterface;
use App\Interface\TakeDamageInterface;
use App\Interface\WeaponInterface;
use App\Traits\CheckIsAliveTrait;
use App\Traits\SufferDamageTrait;

abstract class Monster implements TakeDamageInterface, IsAliveInterface, MonsterInterface
{
    use CheckIsAliveTrait, SufferDamageTrait;

    protected int $health;
    protected array $attackMethods;
    protected WeaponInterface $activeAttack;

    public function __construct()
    {
        /**
         * Note:
         * 
         * In task we don't have anything on monsters health,
         * so I assume both are the same and it is 175 points
         */
        $this->health = 175; 
    }

    public function takeDamage(int $damageAmount)
    {
        $this->health = $this->suffer($damageAmount, $this->health);
    }

    public function isAlive(): bool
    {
        return $this->checkIsAlive($this->health);
    }

    public function setCurrentAttack()
    {
        $currentAttackName = array_rand(array_keys($this->attackMethods));
        $this->activeAttack = $this->attackMethods[$currentAttackName];
    }
    
}