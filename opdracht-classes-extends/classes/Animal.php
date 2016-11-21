<?php

	class Animal{
		protected $name;
		protected $gender;
		protected $health;

		public function __construct($name,$gender,$health){

		}

		public function getName(){
			return $name;
		}

		public function getGender(){
			return $gender;
		}

		public function getHealth(){
			return $health;
		}

		public function changeHealth($healthPoints){
			$newHealth = $health + $healthPoints;
		}

		public function doSpecialMove(){
			return 'walk';
		}
	}
?>