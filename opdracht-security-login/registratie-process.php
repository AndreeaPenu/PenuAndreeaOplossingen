<?php


	$value="";
	
	if(isset($_POST["genereer"])){
		generatePassword();
	}


	function generatePassword(){
		return 'Banaan123'
	}


	$paswoord = $_SESSION['paswoord'];


	if(isset($_POST['registreren'])){

	}

?>