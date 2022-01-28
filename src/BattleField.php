<?php

namespace App;

class BattleField
{
    private static $instance = null;
    private Battle $battle;

    private function __construct()
    {
        // Hide constructor
    }

    public static function instantiate()
    {
        if (self::$instance == null) {
            self::$instance = new BattleField();
        }
 
        return self::$instance;
    }

    public function prepareForBattle(Battle $battle)
    {
        $this->battle = $battle;
    }
}