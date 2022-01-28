<?php

namespace App;

use App\Interface\HeroInterface;
use App\Interface\InventoryInterface;
use App\Interface\IsAliveInterface;
use App\Interface\TakeDamageInterface;
use App\Interface\WeaponInterface;
use App\Traits\CheckIsAliveTrait;
use App\Traits\SufferDamageTrait;
use App\Logger;
use Exception;

abstract class Hero implements TakeDamageInterface, IsAliveInterface, HeroInterface
{
    use CheckIsAliveTrait, SufferDamageTrait;

    protected int $health;
    protected array $allowedWeapons;
    protected InventoryInterface $inventory;
    protected WeaponInterface $activeWeapon = null;

    public function __construct(int $initialHealth)
    {
        $this->health = $initialHealth;
        $this->inventory = new Inventory();
    }

    public function takeDamage(int $damageAmount)
    {
        $this->health = $this->suffer($damageAmount, $this->health);
    }

    public function isAlive(): bool
    {
        return $this->checkIsAlive($this->health);
    }

    protected function isWeaponAllowed(string $weaponName): bool
    {
        return in_array($weaponName, $this->allowedWeapons);
    }

    public function takeWeapon(WeaponInterface $weapon)
    {
        if (!$this->isWeaponAllowed($weapon->getName())) {
            throw new Exception('Weapon not allowed');
        }

        $toLog = self::class . ' took ' . $weapon->getName();
        Logger::log($toLog);

        $this->inventory->addWeapon($weapon);

    }

    public function dropWeapon(): WeaponInterface
    {
        return $this->inventory->removeWeapon();
    }

    public function switchWeapon()
    {
        $newWeapon = $this->inventory->removeWeapon();
        $this->inventory->addWeapon($this->activeWeapon);
        $this->activeWeapon = $newWeapon;
    }

    public function attack(TakeDamageInterface $enemy)
    {
        $toLog = self::class . 'attacked' . get_class($enemy) . 'with' . $this->activeWeapon->getName();
        Logger::log($toLog);

        $this->activeWeapon->makeDamage($enemy);
    }
}