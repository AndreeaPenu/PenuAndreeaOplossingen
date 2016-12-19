<?php
	//controlleer of een file is geupload en voldoet aan bepaalde voorwaarden
 	$name = $_FILES['file']['name'];

 	$extension = strtolower(substr($name,strpos($name,'.')+1));
 

	 $size = $_FILES['file']['size'];//= 145801
	 $max_size = 2097152;

	 $type = $_FILES['file']['type']; 



	 $tmp_name = $_FILES['file']['tmp_name'];


	//moet .png , .jpg of .gif zijn
 	if(isset($name)){
 		
 		if(!empty($name)){

 			if(($extension=='jpg' || $extension=='jpeg' || $extension=='gif')&&($type=='image/jpeg' || $type=='image/jpg') && $size<=$max_size){
 				//timestamp_bestandsnaam.extensie

 				$location = 'img/';
	 			if(move_uploaded_file($temp_name, $location.$name)){
	 				echo 'Uploaded';

	 				$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken
    	
	 				//voeg de nieuwe gegevens toe
	 				$up="INSERT INTO users (email, nieuwebestnaam)
	 					VALUES();"


					if ($db->query($up) === TRUE) {
					    echo "New record created successfully";
					    $_SESSION['notification']= "gegevens succesvol gewijzigd";
					    header("location: gegevens-wijzigen-form.php");

					} else {
					    echo "Error: " . $up . "<br>" . $db->error;
					}


 				}else{
 					echo 'There was an error.';
 					
 				} 


 			}else{
 				echo 'File must be jpg/gif and must be 2mb or less';
 				header('location: gegevens-wijzigen-form.php');
 			}
 		}else{
 			echo 'please choose a file.';
 	}
 }



?>



<html>
<head>
	<title></title>
</head>
<body>
	<p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?php $email ?> | <a href="logout.php">Uitloggen</a></p>
	</br>

	<h1>Gegevens wijzigen</h1>
	<p>Profielfoto</p>


	<form action="gegevens-bewerken.php" method="post" enctype="multipart/form-data">
		<img src="img/profile.jpg">
		</br>
		<input type="file" name="file"><br><br>
		<label for="email">e-mail</label>
		<input id="email" type="text" name="email">
		<input type="submit" value="Gegevens wijzigen">
	</form>
</body>
</html>