<?php

	session_start();

	$value="";

	




	if(isset($_POST["genereer"])){
		$paswoord = $_SESSION["paswoord"]
		generatePassword();
	}


	function generatePassword(){
		return 'Banaan123'
	}


	$paswoord = $_SESSION['paswoord'];


	if(isset($_POST['registreren'])){

	}

?>