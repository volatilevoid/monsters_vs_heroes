<?php

namespace App\Traits;

trait CheckIsAliveTrait
{
    public function checkIsAlive(int $health): bool
    {
        return $health > 0;
    }
}