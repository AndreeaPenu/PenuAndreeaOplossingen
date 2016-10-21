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



		<h2>Registratiegegevens</h2>

		<ul>
			<li><?php echo "e-mail: " . $_SESSION['email'] ?></li>
			<li><?php echo "nickname: " . $_SESSION['nickname'] ?></li>
		<ul>

		<h2>Deel2: adres</h2>



		<form action="adrespagina.php" method="post">


		<ul>
				<li>
					<label for="straat">straat</label>
					<input type="text" name="straat" id="straat">
				</li>

				<li>
					<label for="nummer">nummer</label>
					<input type="number" name="nummer" id="nummer" value="0">
				</li>

				<li>
					<label for="gemeente">gemeente</label>
					<input type="text" name="gemeente" id="gemeente">
				</li>

				<li>
					<label for="postcode">postcode</label>
					<input type="text" name="postcode" id="postcode">
				</li>
			</ul>

			<input type="submit" name="submit" value="Volgende">

		</form>

</body>


</html>