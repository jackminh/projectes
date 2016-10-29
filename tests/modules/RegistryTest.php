<?php 
	use PHPunit\Framework\TestCase;
	use App\modules\Registry;
	use App\modules\Logger;
	class RegistryTest extends TestCase{
	
		protected function setUp(){
			Registry::clear();	
		}	
		/**
		* @dataProvider hasLoggerProvider
		* @covers App\modules\Registry::hasLogger
		*/
		public function testHasLogger(array $loggersToAdd,array $loggersToCheck,array $expectedResult){
			foreach($loggersToAdd as $loggerToAdd){
				Registry::addLogger($loggerToAdd);	
			}
			foreach($loggersToCheck as $index=>$loggerToCheck){
				 $this->assertSame($expectedResult[$index],Registry::hasLogger($loggerToCheck));
			}
		}
		public function hasLoggerProvider(){
			$logger1 = new Logger('test1');
			$logger2 = new Logger('test2');
			$logger3 = new Logger('test3');
	        return [
				[ 
					[$logger1],
					[$logger1,$logger2],
					[true,false],
			
		        ],
				[
					[$logger1],
					['test1','test2'],
					[true,false],
				
				],
				[
					[$logger1,$logger2,$logger3],
					['test1',$logger2,'test3',$logger3],
					[true,true,true,true],
				],	
			];	
		}
		/**
		*@covers App\modules\Registry::clear;
		*/
		public function testClearClears(){
			Registry::addLogger(new Logger('test4'),'test4');	
			$this->setExpectedException('\InvalidArgumentException');
			Registry::getInstance('test5');
		}
		/**
		* @dataProvider removedLoggerProvider
		* @covers App\modules\Registr::addLogger
		* @covers App\modules\removeLogger
		*/
		public function testRemovesLogger($loggerToAdd,$remove){
			Registry::addLogger($loggerToAdd);
			Registry::removeLogger($remove);
			$this->setExpectedException('\InvalidArgumentException');
			Registry::getInstance($loggerToAdd->getName());
		}
		public function removedLoggerProvider(){
			$logger1 = new Logger('test1');
			return [
				[$logger1,$logger1],
				[$logger1,'test1'],
			];
		}	
		/**
		* @covers App\modules\Registry::addLogger
		* @covers App\modules\Registry::getInstance
		* @covers App\modules\Registry::__callStatic
		*/
		public function testGetsSameLogger(){
			$logger1 = new Logger('test1');
		    $logger2 = new Logger('test2');	
			Registry::addLogger($logger1,'test1');
			Registry::addLogger($logger2,'test2');
			$this->assertSame($logger1,Registry::getInstance('test1'));
			$this->assertSame($logger2,Registry::test2('test2'));
		}
		/**
		* @expectedException \InvalidArgumentException
		* @covers App\modules\Registry::getInstance
		*/
		public function testFailsOnNoExistantLogger(){
			Registry::getInstance('test1');	
		}
		/**
		* @covers App\modules\Registry::addLogger
		*/
		public function testReplaceLogger(){
			$log1 = new Logger('test1');
			$log2 = new Logger('test2');
			Registry::addLogger($log1,'log');
			Registry::addLogger($log2,'log',true);
			$this->assertSame($log2,Registry::getInstance('log'));
		}
		public function testFailsOnUnspecifiedReplacement(){
			$log1 = new Logger('test1');
			$log2 = new Logger('test2');
			Registry::addLogger($log1,'log');
			Registry::addLogger($log2,'test1');
		}
	}

