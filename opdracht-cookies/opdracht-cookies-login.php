<?php

	$userInfo = file_get_contents("user.txt");
	$userInfoParts = explode(",",$userInfo);


	if (isset($_POST['submit'])) { 
			$_SESSION['gebruikersnaam'] = $_POST['gebruikersnaam'];
			$_SESSION['passwoord'] = $_POST['passwoord'];	

		//	$userInfoParts[0]; //username
		//	$userInfoParts[1];	//password

			if(($_SESSION['gebruikersnaam'] == $userInfoParts[0]) && ($_SESSION['passwoord'] == $userInfoParts[1])){

			}else{

			}


	} 
	
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h1>Inloggen</h1>
		<form action="dashboard.php" method="post">
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
