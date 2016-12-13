<?php

	session_start();
	
	if(isset($_POST['submit'])){
		$email=$_POST['email'];
		$paswoord=$_POST['paswoord'];

		$_SESSION['inloggen']['email']=$email;
		$_SESSION['inloggen']['paswoord']=$paswoord;
	}



?>