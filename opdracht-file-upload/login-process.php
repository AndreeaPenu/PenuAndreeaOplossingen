<?php

	session_start();



	
	if(isset($_POST['inloggen'])){
		$email=$_POST['email'];
		$paswoord=$_POST['paswoord'];

		$_SESSION['inloggen']['email']=$email;
		$_SESSION['inloggen']['paswoord']=$paswoord;



		//connectie met database
	$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken

	//selecteer alle gegevens op basis van het ingevulde e-mailadres. 
	$query= "SELECT * FROM users
			WHERE email = :email;"

	$statement = $db->prepare($query);
	$statement->bindValue(':email',$email);
	$exec=$statement->execute();

	if(mysql_num_rows($query)){
    	
    	//haal salt uit db
		$slt="SELECT salt FROM users
				WHERE email = :email;"

		if (md5($password+$salt) == $password){

			$cookie_name = "login";
			$cookie_value = $email + ',' + $email_hash;
			setcookie($cookie_name, $cookie_value, time() + (86400 * 30), ",");
			header("Location: dashboard.php");

		}else{
			$_SESSION['notification']="het passwoord is onjuist";
			header("Location: login-form.php");
		}



    }else{

    	$_SESSION["notification"]="Deze gebruiker werd niet gevonden.";
    	header("Location: login-form.php");
    }
	}



?>