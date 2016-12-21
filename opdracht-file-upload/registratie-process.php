<?php

	session_start();


	
	
	if(isset($_POST["registreer"])){
		try{

			$email = $_SESSION["email"];
			$password = $_SESSION["password"];

			$_SESSION['registreer']['email'] = $email;
			$_SESSION['registreer']['paswoord'] = $paswoord;


			//check of email adres geldig is
			if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
			  //echo("$email is a valid email address");
				$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken
			  	
			  	$select = mysql_query("SELECT email FROM users 
			  							WHERE email = :email");

			  	$statement = $db->prepare($select);
			  	$statement->bindValue(':email',$email);
			  	$exec=$statement->execute();
			  	$row = $statement->fetch();

			  	//als emailadres er niet in is
			  	if($row==false){
			  		$insert = mysql_query("INSERT INTO users(email,salt,hashed_password,last_login_time)
			  								VALUES(:email,:salt,:password_hash,NOW())");
			  		$statement2 = $db->prepare($insert);

				  	//maak salt + hashed password aan
	    			$salt = uniqid(mt_rand(),true);
	    			$saltedPass = $paswoord+$salt;
	    			$password_hash=md5($saltedPass);

	    			//values binden
	    			$statement2->bindValue(':email',$email);
	    			$statement2->bindValue(':salt',$salt);
	    			$statement2->bindValue(':password',$hashed_password);
	    			$exec2=$statement2->execute();

	    			if($exec2){
	    				$email_salt = (uniqid(mt_rand(),true))+$email;
						$email_hash = md5($email_salt); 
						//cookie setten 
						$cookie_name = "login";
						$cookie_value = $email + ',' + $email_hash;
					    setcookie($cookie_name, $cookie_value, time() + (86400 * 30));
					    header("Location: dashboard.php");
	    			}else{
	    				$_SESSION['notification']="Er is iets mis gegaan.";
	    				header("Location: registratie-form.php");
	    			}
	    			//als email adres al bestaat
			  	}else{
			  		$_SESSION['notification']="Dit email adres bestaat al";
			  		header("Location: registratie-form.php");
			  	}				
			} else {
			  $_SESSION['notification']="Dit is geen geldig email adres";
			  header("Location: registratie-form.php");
			}

		}catch(PDOException $e){
			$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
		}
	}



	if(isset($_POST["genereer"])){
		
		$_SESSION['registreer']['email'] = $_POST['email'];
		$_SESSION['registreer']['paswoord'] = generatePassword();
		header("Location: registratie-form.php");
	}


	function generatePassword(){
		$characters = 'abcdefghijklmnopqrstuvwxyz0123456789_-/#&!?';
		$string = '';
 		$max = strlen($characters) - 1;
 		$length=8;
 		for ($i = 0; $i < $length; $i++) {
      		$string .= $characters[mt_rand(0, $max)];
 		}
 		return $string;
	}

	


	

?>