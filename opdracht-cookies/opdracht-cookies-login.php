<?php

	session_start();
	$userInfo = file_get_contents("user.txt");
	$userInfoParts = explode(",",$userInfo);

	$melding=null;

	if (isset($_POST['submit'])) { 
			$_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
			$_SESSION['passwoord'] = $_POST['passwoord'];	

		//	$userInfoParts[0]; //username
		//	$userInfoParts[1];	//password

			if(($_SESSION['gebruikersnaam'] == $userInfoParts[0]) && ($_SESSION['passwoord'] == $userInfoParts[1])){
				setcookie('test','',time()+360);
				$melding = "";
				header("location:opdracht-cookies-dashboard.php");
			}else{
				$melding = "Gebruikersnaam en/of passwoord niet correct. Probeer opnieuw";
			}

			
	} 


?>
<!DOCTYPE html>
<html>
<head>

	<style>
		.melding{
			background-color:red;
		}
	</style>
</head>
<body>
		<h1>Inloggen</h1>

			<p class="<?php echo ($valid==true) ? '' : 'melding' ?>"> <?php echo $melding ?> </p>

			 
			 
			 		<form action="opdracht-cookies-login.php" method="post">	
			  
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
