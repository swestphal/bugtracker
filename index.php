<?php
    declare(strict_types=1);

    // xdebug settings
    ini_set('xdebug.var_display_max_depth', '100');
    ini_set('xdebug.var_display_max_children', '256');
    ini_set('xdebug.var_display_max_data', '12288');

    require_once __DIR__ . '/vendor/autoload.php';
    require_once __DIR__ . '/Src/Exception/Exception.php';
//
//
//    $db = new mysqli('sfsd','root','root','buggi');
//
//    $config = \App\Helpers\Config::getFileContent('jipiyaya');
//
//
//
//
//
//    $config = \App\Helpers\Config::get('app', 'app_name');
//
//    $application = new \App\Helpers\App;
//    echo $application->getServerTime()->format('d-m-Y H:i:s') . PHP_EOL;
//    echo $application->getLogPath() . PHP_EOL;
//    echo $application->getEnvironment() . PHP_EOL;
//    echo $application->isDebugMode() . PHP_EOL;
//    echo $application->isRunningFromConsole() . PHP_EOL;
//
//
//
//    $logger = new \App\Logger\Logger();
//    $logger->log(\App\Logger\LogLevel::EMERGENCY,'There is an emergency',['exception'=>'exceeptuin occured']);
//    $logger->info('User accoun created',['id'=>5]);

