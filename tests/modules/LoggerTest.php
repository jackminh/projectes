<?php declare(strict_types=1);
	use PHPUnit\Framework\TestCase;
	use App\modules\Logger;
	class LoggerTest extends TestCase{
		/**
		* @covers App\modules\Logger::getName
		*/
		public function testGetName(){
			$logger = new Logger('foo');
			$this->assertEquals('foo',$logger->getName());
		}
		/**
		*@covers App\modules\Logger::getLevelName
		*/
		public function testGetLevelName(){
			$this->assertEquals('ERROR',Logger::getLevelName(Logger::ERROR));	
		}
		/**
		*@covers App\modules\Logger::addRecord
		*/
	
	
	}
