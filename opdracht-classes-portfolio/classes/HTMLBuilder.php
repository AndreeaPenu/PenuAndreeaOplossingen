<?php
	class HTMLBuilder{



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