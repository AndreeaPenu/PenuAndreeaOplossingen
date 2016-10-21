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
			<li><?php echo "e-mail: " . $_SESSION['email'] ?> <a href="registratiepagina.php"> Wijzig </a></li>
			<li><?php echo "nickname: " . $_SESSION['nickname'] ?> <a href="registratiepagina.php"> Wijzig </a></li>
			<li><?php echo "straat: " . $_SESSION['straat'] ?> <a href="adrespagina.php"> Wijzig </a></li>
			<li><?php echo "nummer: " . $_SESSION['nummer'] ?> <a href="adrespagina.php"> Wijzig </a></li>
			<li><?php echo "gemeente: " . $_SESSION['gemeente'] ?> <a href="adrespagina.php"> Wijzig </a></li>
			<li><?php echo "postcode: " . $_SESSION['postcode'] ?> <a href="adrespagina.php"> Wijzig </a></li>


		<ul>

	



</body>


</html>			