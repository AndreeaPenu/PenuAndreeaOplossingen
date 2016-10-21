<?php

	$userInfo = file_get_contents("user.txt");
	$userInfoParts = explode(",",$userInfo);

	$valid = false;


	if (isset($_POST['submit'])) { 
			$_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
			$_SESSION['passwoord'] = $_POST['passwoord'];	

		//	$userInfoParts[0]; //username
		//	$userInfoParts[1];	//password

			if(($_SESSION['gebruikersnaam'] == $userInfoParts[0]) && ($_SESSION['passwoord'] == $userInfoParts[1])){
				setcookie('test','',time()+360);
				$valid = true;
			}else{
				echo "Gebruikersnaam en/of passwoord niet correct. Probeer opnieuw";
				$valid = false;
			}





	} 
	
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h1>Inloggen</h1>
			 <?php if($valid == true) : ?> 
					<form action="opdracht-cookies-dashboard.php" method="post"> 
			  <?php else : ?> 
			 		<form action="opdracht-cookies-login.php" method="post">	
			  <?php endif; ?>

			<ul>
				<li>
					<label for="gebruikersnaam">gebruikersnaam</label>
					<input type="text" name="gebruikersnaam" id="gebruikersnaam" value="">
				</li>
				<li>
					<label for="passwoord">passwoord</label>
					<input type="password" name="passwoord" id="passwoord" value="">
				</li>
			</ul>
			<input type="submit" name="submit" value="submit Query">
		</form>
</body>
</html>
