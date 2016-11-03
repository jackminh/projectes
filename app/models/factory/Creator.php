<?php
	namespace App\models\factory;
	abstract class Creator{
	
		protected abstract function factoryMethod();
		public function startFactory(){
		
		    $mfg = $this->factoryMethod();
		    return $mfg;
		
		}
	
	
	
	
	
	}
