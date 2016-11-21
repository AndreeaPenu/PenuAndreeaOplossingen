<?php

	class Percent{
		public $absolute;
		public $relative;
		public $hundred;
		public $nominal;

		public function __construct($new,$unit){
			$absolute = $new/$unit;
			$relative = $absolute-1;
			$hundred = $absolute*100;
			$nominal;

			if($absolute > 1){
				$nominal = 'positive';
			}else if($absolute==1){
				$nominal = 'status-quo';
			}else if($absolute < 1){
				$nominal = 'negative';
			}

			
		}

		public function formatNumber($number){
			$formNumber = number_format($number,2,'.','');
			return $formNumber;
		}



	}


?>