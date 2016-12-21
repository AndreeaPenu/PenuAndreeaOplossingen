<?php
	
	session_start();
	//of alles geset is
	//$fout = $_SESSION['error'];

	if (isset($_POST['submit'])) 
	{

		$email 			= 	$_POST['email'];
		$boodschap 		= 	$_POST['boodschap'];
		
		$headers 		= 	'From: '. $email;

		mail( $email, $boodschap, $headers );
		
		$admin = "marzone.ap@gmail.com";


			if(filter_var($email,FILTER_VALIDATE_EMAIL)){
				try{
					$db = new PDO('mysql:host=localhost;dbname=opdracht-contact', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken
				}catch(PDOException $e){
					$messageContainer = 'Er ging iets mis: ' . $e->getMessage();
				}


				$insert = "INSERT INTO contact_messages(email,message)
							VALUES(:email,:boodschap)";

				$statement= $db->prepare($insert);
				$statement->bindValue(':email',$email);
				$statement->bindValue(':boodschap',$boodschap);
				$exec=$statement->execute();

				if(isset($_POST['kopie'])){
					$_SESSION['kopie']=true;
				}

				if(isset($_SESSION['kopie'])){
					//email sturen naar eigen email ook
				}

			}
			


	}

?>
