<?php
	namespace App\models\factory;
	use App\models\factory\Creator;
	use App\models\factory\TextProduct;
	class TextFactory extends Creator{

		public function factoryMethod(){
			$product = new TextProduct();
			return ($product->getProperties());
		
		}	
	
	
	}
