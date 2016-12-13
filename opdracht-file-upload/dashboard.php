<?php

//controlleer of cookie met login geset is
//niet-> redirect naar login-form.php
//wel->

	session_start();
	$email = $_SESSION['email'];

?>


<html>
<head>
	<title></title>
</head>
<body>
	
	<p><a href="dashboard.php">Terug naar dashboard</a> | Ingelogd als <?php $email ?> | <a href="logout.php">Uitloggen</a></p>
	</br>
	<h1>Dashboard</h1>
	<ul>
		<a href=""><li>Artikels</li></a>
		<a href="gegevens-wijzigen-form.php"><li>Gegevens wijzigen</li></a>

	</ul>


</body>
</html>