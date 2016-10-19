<?php

	$password="azerty";
	$username="stijn";



		if (isset($_POST['submit'])){
			//ingegeven username en password moeten overeen komen met wat in de code staat
		if ($_POST['username'] == $username && $_POST['password'] == $password )
		{
			echo "Dit is correct";
		}
		else
		{
			echo "De gegevens die u hebt ingevuld zijn niet correct";
		}
	}


?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">

</head>
<body>

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

</body>
</html>