<?php
    /**
     * ApplicationTest.php
     *
     * author:      Simone Westphal
     * copyright:   2020 thinkweb360 (https://thinkweb360.com)
     *
     * file:        ApplicationTest.php
     */


    namespace Tests\Units;


    use App\Contracts\LoggerInterface;
    use App\Helpers\App;
    use App\Logger\Logger;
    use App\Logger\LogLevel;
    use App\Exception\InvalidLogLevelArgument;
    use PHPUnit\Framework\TestCase;

    class LoggerTest extends TestCase
    {
        /** @var Logger $logger  */

        private $logger;
        public function setUp() {
            $this->logger = new Logger();
        }

        public function testItImplementsTheLoggerInterface() {
            self::assertInstanceOf(LoggerInterface::class,new Logger);
        }

        public function testItCanCreateDifferentTypesOfLogLevel() {
            $this->logger->info('Testing Info Log');
            $this->logger->error('Testing Error Log');
            $this->logger->log(LogLevel::ALERT,'Testing Alert Log');
            $app = new App();

            $fileName = sprintf("%s/%s-%s.log", $app->getLogPath(), 'test', date("j.n.Y"));
            self::assertFileExists($fileName);

            $contentOfLogFile = file_get_contents($fileName);
            self::assertStringContainsString('Testing Info Log',$contentOfLogFile);
            self::assertStringContainsString('Testing Error Log',$contentOfLogFile);
            self::assertStringContainsString(LogLevel::ALERT,$contentOfLogFile);
            unlink($fileName);
            self::assertFileNotExists($fileName);
        }

        public function testItThrowsInvalidLogLevelArgumentExceptionWhenGivingWrongLogLevel() {
            self::expectException(InvalidLogLevelArgument::class);
            $this->logger->log('invalid','Testing invalid log level');
        }
    }