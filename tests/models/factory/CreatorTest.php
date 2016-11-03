<?php
	use PHPunit\Framework\TestCase;
	class CreatorTest extends TestCase{
		
		public function testStartFactory(){
		
			$stub = $this->getMockForAbstractClass('App\models\factory\Creator');	

			$stub->expects($this->any())->method('factoryMethod')->will($this->returnValue(TRUE));

			$this->assertTrue($stub->startFactory());
		
		}	
	
	
	
	}
