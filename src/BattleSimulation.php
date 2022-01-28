<?php

namespace App;

class BattleSimulation
{

    public static function run()
    {
        $battleField = BattleField::instantiate();


        $battleField->addMonster(new Spider());

        $battleField->addHero(new Knight());


    }
}