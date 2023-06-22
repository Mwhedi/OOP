<?php
namespace OOPhw\Traits;

trait Loggable
{
    public function log($message)
    {
        $logFile = 'log.txt';
        file_put_contents($logFile, $message, FILE_APPEND);
    }
}
