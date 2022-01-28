<?php

namespace App;

use App\Interface\HeroInterface;
use App\Interface\MonsterInterface;

class BattleField
{
    private static $instance = null;

    private MonsterInterface $monster;
    private HeroInterface $hero;


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

    public function addMonster(MonsterInterface $monster)
    {
        $this->monster = $monster;
    }

    public function addHero(HeroInterface $hero)
    {
        $this->hero = $hero;
    }
    
}