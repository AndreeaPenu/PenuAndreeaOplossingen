<?php

	$password="azerty";
	$username="stijn";
	$message="";
	$loggedIn = false;


		if (isset($_POST['submit'])){
			//ingegeven username en password moeten overeen komen met wat in de code staat
		if ($_POST['username'] == $username && $_POST['password'] == $password )
		{
			$message="welkom";
			$loggedIn = true;
		}
		else
		{
			$message="Er ging iets mis bij het inloggen, probeer opnieuw";
		}
	}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

</head>
<body>
	

	<?php echo $message ?>
	

	<h1>Inloggen</h1>



	<form action="opdracht-post.php" method="post">


		<ul>
				<li>
					<label for="username">Username:</label>
					<input type="text" name="username" id="username">
				</li>
				<li>
					<label for="password">Paswoord:</label>
					<input type="password" name="password" id="password">
				</li>
			</ul>

			<input type="submit" name="submit" value="Submit Query">
	</form>

</body>
</html>