<?php
    declare(strict_types=1);

    // xdebug settings
    ini_set('xdebug.var_display_max_depth', '10');
    ini_set('xdebug.var_display_max_children', '256');
    ini_set('xdebug.var_display_max_data', '12288');

    require_once __DIR__ . '/vendor/autoload.php';

    set_exception_handler([new \App\Exception\ExceptionHandler(), 'handle']);
    $config = \App\Helpers\Config::getFileContent('jipiyaya');


    var_dump($config);

    $config = \App\Helpers\Config::get('app', 'app_name');
    $application = new \App\Helpers\App;
    echo $application->getServerTime()->format('d-m-Y H:i:s') . PHP_EOL;
    echo $application->getLogPath() . PHP_EOL;
    echo $application->getEnvironment() . PHP_EOL;
    echo $application->isDebugMode() . PHP_EOL;
    echo $application->isRunningFromConsole() . PHP_EOL;
