<?php
	
	session_start();
	//of alles geset is
	//$fout = $_SESSION['error'];


	$admin = "marzone.ap@gmail.com";

	$mysql_host='localhost';
	$mysql_user='root';
	$mysql_pass='root';

	$mysql_db = 'database_email';

	if(!mysql_connect($mysql_host,$mysql_user,$mysql_pass) || !mysql_select_db($mysql_db)){
		//if it doesn't connect successfully
		die(mysql_error());
	}else{
		echo 'connected';
	}

	if (isset($_POST['submit'])) 
	{

		$email 			= 	$_POST['email'];
		$boodschap 		= 	$_POST['boodschap'];
		
		$headers 		= 	'From: '. $email;

		mail( $email, $boodschap, $headers );

	}

?>
