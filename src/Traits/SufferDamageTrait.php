<?php

namespace App\Traits;

trait SufferDamageTrait
{
    public function suffer(int $damageAmount, int $health): int
    {
        $remainingHealth = 0;

        if ($damageAmount < $health) {
            $remainingHealth = $health - $damageAmount;
        }

        return $remainingHealth;
    }
}