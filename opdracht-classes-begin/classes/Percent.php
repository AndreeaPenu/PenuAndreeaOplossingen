<?php

	class Percent{
		public $absolute;
		public $relative;
		public $hundred;
		public $nominal;

		public function __construct($new,$unit){
			$this->absolute = $new/$unit;
			$this->relative = $this->absolute-1;
			$this->hundred = $this->relative*100;
			

			if($this->absolute > 1){
				$this->nominal = 'positive';
			}else if($this->absolute==1){
				$this->nominal = 'status-quo';
			}else if($this->absolute < 1){
				$this->nominal = 'negative';
			}

			
		}

		public function formatNumber($number){
			$formNumber = number_format($number,2,'.','');
			return $formNumber;
		} 



	}


?>