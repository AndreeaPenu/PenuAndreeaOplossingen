<?php

	session_start();

	

	
	if(isset($_POST["registreer"])){
		try{

			$email = $_SESSION["email"];
			$password = $_SESSION["password"];

			$_SESSION['registreer']['email'] = $email;
			$_SESSION['registreer']['paswoord'] = $paswoord;



			$db = new PDO('mysql:host=localhost;dbname=phpoefening029', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken
		
			$queryUser = 'SELECT * FROM users
						WHERE username = :username
						AND password = :password';


			$statement = $db->prepare($queryUser);

			$statement->bindParam(":username", $_POST["username"]);
			$statement->bindParam(":password", $_POST["password"]);

		
			
			$statement->execute();

			$fetchAssoc = array();

			$result = $statement->fetch(PDO::FETCH_ASSOC);


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