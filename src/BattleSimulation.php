<?php

namespace App;

class BattleSimulation
{

    public static function run()
    {
        $battleField = BattleField::instantiate();

        $battleField->prepareForBattle(new Battle());

        $hero = new Knight();

    }
}