<?php
	session_start();
?>


<!DOCTYPE html>
<html>
<head>


</head>
<body>

		<h1>Deel1: registratiegegevens</h1>


		<form action="adrespagina.php" method="post">


		<ul>
				<li>
					<label for="email">e-mail</label>
					<input type="text" name="email" id="email" value="">
				</li>
				<li>
					<label for="nickname">nickname</label>
					<input type="text" name="nickname" id="nickname" value="">
				</li>
			</ul>

			<input type="submit" name="submit" value="Volgende">

		</form>



</body>


</html>
