<?php
	use PHPunit\Framework\TestCase;

	class TextFactoryTest extends TestCase{


		public function testFactoryMethod(){
		
			$textProduct = new App\models\factory\TextProduct();	

			$this->assertEquals("TextProduct",$textProduct->getProperties());
		
		
		}		
			
	
	
	}
