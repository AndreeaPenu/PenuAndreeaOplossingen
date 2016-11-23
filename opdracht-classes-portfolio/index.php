<?php
	require_once '/classes/HTMLBuilder.php';

	$builder = new HTMLBuilder();



	$buildHeader = $builder->$buildHeader();
	$buildBody = $builder->$buildBody();
	$buildFooter = $builder->$buildFooter();

	$buildHead;
	$buildBody;
	$buildFooter;

	public function __construct($header,$body,$footer){

	}

	public function findFiles($dir,$file){

	}

	private function buildJsLinks(){
		findFiles('/js/script.js','js');
	}

	private function buildCssLinks(){
		findFiles('/css/global.css','css');
	}


?>