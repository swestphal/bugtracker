<?php
    /**
     * BaseException.php
     *
     * author:      Simone Westphal
     * copyright:   2020 thinkweb360 (https://thinkweb360.com)
     *
     * file:        BaseException.php
     */


    namespace App\Exception;

    use Exception;
    use Throwable;

    abstract class BaseException extends Exception
    {
        protected $data = [];

        public function __construct(
            string $message = "",
            array $data = [],
            int $code = 0,
            Throwable $previous = NULL
        )
        {
            $this->data = $data;
            parent::__construct($message, $code, $previous);
        }

        public function setData(string $key, $value): void
        {
            $this->data[$key] = $value;
        }

        public function getExtractData(): array
        {
            if (count($this->data) === 0) {
                return $this->data;
            }
            return json_decode(json_encode($this->data), TRUE);
        }
    }

