<?php
    /**
     * ExceptionHandler.php
     *
     * author:      Simone Westphal
     * copyright:   2020 thinkweb360 (https://thinkweb360.com)
     *
     * file:        ExceptionHandler.php
     */


    namespace App\Exception;

    use Throwable;
    use App\Helpers\App;

    class ExceptionHandler
    {
        public function handle(\Throwable $exception): void
        {
            $application = new App;
            if ($application->isDebugMode()) {
                var_dump($exception);
            } else {
                echo "This should not have happened, please try again";
            }
            exit;

        }
    }