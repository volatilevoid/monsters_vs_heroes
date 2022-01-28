<?php

namespace App;

class Battle
{
    public static function run()
    {
        $logger = new Logger();

        $logger->log('test');
        $logger->log('test 22');
    }
}