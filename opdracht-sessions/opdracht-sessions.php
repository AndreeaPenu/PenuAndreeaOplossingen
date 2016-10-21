<?php

	session_start();

	


	if (isset($_POST['submit'])) { 
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['nickname'] = $_POST['nickname'];
			
	} 

?>


<!DOCTYPE html>
<html>
<head>


</head>
<body>

		<h1>Deel1: registratiegegevens</h1>


		<form action="opdracht-sessions.php" method="post">


		<ul>
				<li>
					<label for="email">e-mail</label>
					<input type="text" name="email" id="email">
				</li>
				<li>
					<label for="nickname">nickname</label>
					<input type="text" name="nickname" id="nickname">
				</li>
			</ul>

			<input type="submit" name="submit" value="Volgende">

		</form>

		


</body>


</html>
