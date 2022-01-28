<?php

namespace App;

use App\Interface\LoggerInterface;
use DateTime;

class Logger implements LoggerInterface
{

    public static function log(string $toLog): void
    {
        $logFileDir = __DIR__ . '/Logs';
        $logFile = $logFileDir. '/log.txt';

        if (!file_exists($logFile)) {
            $isDirCreated = mkdir($logFileDir, 0777, true);

            if (!$isDirCreated) {
                echo "problem creating Log directory";
                die;
            }
        }

        file_put_contents(
            $logFile, 
            self::formatLine($toLog), 
            FILE_APPEND
        );
    }

    private static function formatLine(string $line): string
    {
        return $line . "\n";
    }
}