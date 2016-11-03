<?php
	namespace App\models\factory;
	use App\models\factory\Product;

	class TextProduct implements Product{
	
		private $mfgProduct ;	
		public function getProperties(){


			$this->mfgProduct =  "TextProduct";

			return $this->mfgProduct;
		
		}	
	
	}
