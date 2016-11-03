<?php
	use PHPunit\framework\TestCase;
	use App\models\factory\TextProduct;
	class TextProductTest extends TestCase{
	
		public function testGetProperties(){
			$obj = new TextProduct();	
			$this->assertEquals('TextProduct',$obj->getProperties());		
		}
	
	
	}
