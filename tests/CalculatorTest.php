<?php
	require "./../vendor/autoload.php";

	use PHPunit\Framework\TestCase;

	class CalculatorTest extends TestCase{
	
		public function testAdd(){

			$calculator = new app\libararies\Calculator();
			$this->assertEquals(4,$calculator->add(2,2));

		}
	
	
	}
