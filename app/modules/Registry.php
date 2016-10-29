<?php
	namespace App\modules;
	use App\modules\Logger;
	class Registry{
		/**
		* List of all loggers in the registry(by named indexs)
		* @var Logger[]
		*/
		private static $loggers=[];	
		/**
		* Adds new logging channel to the registry
		* @param Logger $logger Instanch of the loggin channel
		* @param  string @name Name of the loggin channel ($logger->geName() by default)
		* @param bool $overwrite Overwrite instanc in the registry if the given name already exists
		* @throws \InvalidArgumentException if $overwrite set to false and named Logger instance already exists
		*/

		public static function addLogger(Logger $logger,$name=null,$overwrite=false){
			$name = $name ? $name : $logger->getName();
		   if(isset(self::$loggers[$name]) && !$overwrite){
			   throw new \InvalidArgumentException('Logger with the give name already exists');
		   }
		   self::$loggers[$name] = $logger;
		
		}
		/**
		* Checks if such loggin channel exists by name or instance
		* @param string|Logger $logger Name or logger instance
		*/
		public static function hasLogger($logger){
			if($logger instanceof Logger){
				$index = array_search($logger,self::$loggers,true);
				return false !==$index;
			}	
			return isset(self::$loggers[$logger]);	
		}	
		/**
		* clears the register
		*/
		public static function clear(){
			self::$loggers=[];	
		}
		/**
		* Get Logger instance from the registry
		*/
 		public static function getInstance($name){
 			if(!isset(self::$loggers[$name])){
 				 throw new \InvalidArgumentException(sprintf('Requested "%s" logger name is not in the instance',$name));
 			}
 			return self::$loggers[$name];	
 		}
		/*
		* remove instance from registry by name or instance
		*/
		public static function removeLogger($logger){
			if($logger instanceof Logger){
				if(false!==($idx=array_search($logger,self::$loggers,true))){
					unset(self::$loggers[$idx]);	
				}	
			}else{
				unset(self::$loggers[$logger]);
			}
		 }
		 public static function __callStatic($name,$argument){
			return 	self::getInstance($name);
		 }








	}
