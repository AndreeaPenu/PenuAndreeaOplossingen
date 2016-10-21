<?php

	session_start();

	


	if (isset($_POST['submit'])) { 
			$_SESSION['straat'] = $_POST['straat'];
			$_SESSION['nummer'] = $_POST['nummer'];
			$_SESSION['gemeente'] = $_POST['gemeente'];
			$_SESSION['postcode'] = $_POST['postcode'];
			
	} 

?>


<!DOCTYPE html>
<html>
<head>


</head>
<body>



		<h2>Registratiegegevens</h2>

		<ul>
			<li><?php echo "straat: " . $_SESSION['straat'] ?></li>
			<li><?php echo "nummer: " . $_SESSION['nummer'] ?></li>
			<li><?php echo "gemeente: " . $_SESSION['gemeente'] ?></li>
			<li><?php echo "postcode: " . $_SESSION['postcode'] ?></li>
		<ul>

		<h2>Deel2: adres</h2>



		<form action="overzichtspagina.php" method="post">


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

		<a href="vernietig.php">Vernietig</a>

</body>


</html>