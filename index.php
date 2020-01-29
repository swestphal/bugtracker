<?php
    declare(strict_types=1);

    require_once __DIR__ . '/vendor/autoload.php';


    $config = \App\Helpers\Config::get('app', 'app_name');
    $application = new \App\Helpers\App;
    echo $application->getServerTime()->format('d-m-Y H:i:s') . PHP_EOL;
    echo $application->getLogPath() . PHP_EOL;
    echo $application->getEnvironment() . PHP_EOL;
    echo $application->isDebugMode() . PHP_EOL;
    echo $application->isRunningFromConsole() . PHP_EOL;
