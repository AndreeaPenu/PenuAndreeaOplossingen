<?php

	session_start();

	

	
	if(isset($_POST["registreer"])){
		try{

			$email = $_SESSION["email"];
			$password = $_SESSION["password"];

			$_SESSION['registreer']['email'] = $email;
			$_SESSION['registreer']['paswoord'] = $paswoord;


			//check of email adres geldig is
			if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
			  //echo("$email is a valid email address");

			  	$select = mysql_query("SELECT 'email' FROM 'users' WHERE 'email' = '".$_POST['email']."'") or exit(mysql_error());
				
			  	//check of email adres reeds gebruikt is
				if(mysql_num_rows($select)){
    				$_SESSION["errormsg"]="This email is already being used";
    				header("Location: registratie-form.php");
    			}

    			//emailadres is geldig en komt niet voor in database
    			//maak salt + hashed password aan
    			$salt = uniqid(mt_rand(),true);
    			$saltedPass = $salt + $paswoord;
    			$password_hash=md5($saltedPass);


    			$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken
    			//insert user in database
    			$qry='INSERT INTO users (email,salt,hashed_password,last_login_time)
    				VALUES ("$email","$salt","password_hash","now()"); '

    				if ($db->query($qry) === TRUE) {
					    echo "New record created successfully";
					    //cookie setten
					  
						$email_salt = (uniqid(mt_rand(),true))+$email;
						$email_hash = md5($email_salt);  

						$cookie_name = "login";
						$cookie_value = $email + ',' + $email_hash;
					    setcookie($cookie_name, $cookie_value, time() + (86400 * 30), ",");
					    header("Location: dashboard.php");
					} else {
					    echo "Error: " . $qry . "<br>" . $db->error;
					}



			} else {
			  echo("$email is not a valid email address");
			  $_SESSION["errormsg"]="This email address is not a valid email address";
			  header("Location: registratie-form.php");
			}

			


		}catch(PDOException $e){
			$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
		}
	}



	if(isset($_POST["genereer"])){
		$_SESSION['registreer']['email'] = $_POST['email'];
		$_SESSION['registreer']['paswoord'] = generatePassword();
	}


	function generatePassword(){
		return 'Banaan123';
	}


	


	

?>