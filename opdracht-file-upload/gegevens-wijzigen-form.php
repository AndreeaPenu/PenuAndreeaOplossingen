



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