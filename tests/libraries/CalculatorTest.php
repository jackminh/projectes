<?php
	use PHPunit\Framework\TestCase;
	use App\libraries\Calculator;
	class CalculatorTest extends TestCase{
	

		public function setUp(){
			$this->calculator = new Calculator;
		}
		public function testAdd(){
		
			$this->assertEquals(4,$this->calculator->add(2,2));
		}
		/**
		*  @expectedExpection InvalidArgumentException
		*/
		public function testThrowsExpectionIfNonNumberIsPasswd(){

                $this->calculator ->add('a', 'b');
		}

	}
