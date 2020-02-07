<?php
    /**
     * logger_interface.php
     *
     * author:      Simone Westphal
     * copyright:   2020 thinkweb360 (https://thinkweb360.com)
     *
     * file:        logger_interface.php
     */


    namespace App\Contracts;


    interface LoggerInterface
    {
        public function emergency(string $message, array $context = []);
        public function alert(string $message, array $context = []);
        public function critical(string $message, array $context = []);
        public function error(string $message, array $context = []);
        public function warning(string $message, array $context = []);
        public function notice(string $message, array $context = []);
        public function info(string $message, array $context = []);
        public function debug(string $message, array $context = []);
        public function log(string $level, string $message, array $context = []);
    }