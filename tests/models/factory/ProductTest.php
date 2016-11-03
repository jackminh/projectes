<?php 
    use PHPunit\framework\TestCase;
	class ProductTest extends TestCase{
	
		public function testGetProperties(){
			
			$stub = $this->getMockForAbstractClass("App\\models\\factory\\Product");
		
			$stub->expects($this->any())->method('getProperties')->will($this->returnValue('TextProduct'));		
		
			$this->assertEquals("TextProduct",$stub->getProperties());
		}	
	
	
	}
