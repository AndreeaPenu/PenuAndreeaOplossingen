<?php
	class HTMLBuilder{




		public function __construct($header,$body,$footer){
			$this->header = $header;
			$this->body = $body;
			$this->footer = $footer;
		}

		public function findFiles($dir,$file){

		}

		private function buildJsLinks(){
			findFiles('/js/script.js','js');
		}

		private function buildCssLinks(){
			findFiles('/css/global.css','css');
		}



		public function buildHeader(){
			include 'html/header-partial.php';
			include 'css/global.css';
		}

		public function buildBody(){
			include 'html/body.partial.php';
		}

		public function buildFooter(){
			include 'html/footer-partial.php';
			include 'js/script.js';
		}
	}



?>