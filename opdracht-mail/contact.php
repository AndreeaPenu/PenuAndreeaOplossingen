<?php


	$admin = "marzone.ap@gmail.com";


	if (isset($_POST['submit'])) 
	{

		$email 			= 	$_POST['email'];
		$boodschap 		= 	$_POST['boodschap'];
		
		$headers 		= 	'From: '. $email;

		mail( $email, $boodschap, $headers );

	}

?>
