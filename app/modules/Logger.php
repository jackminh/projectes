<?php
	namespace App\modules;
	class Logger{
		/**
		* Detailed debug information
		*/
		const DEBUG=100;
		/**
		*interesting events
		* Examples:User logs in,SQL logs
		*/
		const INFO=200;
		/**
		*Uncommon events
		*/
		const NOTICE = 250;
		/**
		*
		*/
		const WANRING =300;
		/**
		* Runtime errors
		*/
		const ERROR=400;
		const CRITICAL = 500;
		const ALERT = 550;
		const EMERGENCY=600;
		const API=2;
		protected static $levels = [
			self::DEBUG=>'DEBUG',
			self::INFO=>'INFO',
			self::NOTICE=>'NOTICE',
			self::ERROR=>'ERROR',
			self::CRITICAL=>'CRITICAL',
			self::ALERT=>'ALERT',
			self::EMERGENCY=>'EMERGENCY' 
		];
		protected  $name;
		public function __construct($name){
			$this->name = $name;	
		}	
		public function getName(){
	       return $this->name;	
		}
		/**
		* Gets the name of the logging level
		*@param int $level
		*@throws \Psr\Log\InvalidArgumentException If level is not defined
		*return string
		*/
		public static function getLevelName(int $level):string{
			if(!isset(static::$levels[$level])){
				throw new InvalidArgumentException('Level"'.$level.'"is not defined,use one of:'.implode(',',array_keys(static::$levels)));
			}	
           return static::$levels[$level];		
		
		}
	
	}
