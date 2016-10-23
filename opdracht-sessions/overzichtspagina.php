<?php
	session_start();
	if (isset($_POST['submit'])) { 
			$_SESSION['straat'] = $_POST['straat'];
			$_SESSION['nummer'] = $_POST['nummer'];
			$_SESSION['gemeente'] = $_POST['gemeente'];
			$_SESSION['postcode'] = $_POST['postcode'];	
	} 

	if (isset($_POST['wijzig'])){
		$id = $_GET['id'];
		$_SESSION[$id] = $_POST[$id];
	}
	
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h2>Registratiegegevens</h2>
		<ul>
			<li><?php echo "e-mail: " . $_SESSION['email'] ?> <a name="wijzig" id="email" action="registratiepagina.php" method="post"> Wijzig </a></li>
			<li><?php echo "nickname: " . $_SESSION['nickname'] ?> <a name="wijzig" id="nickname" href="registratiepagina.php"> Wijzig </a></li>
			<li><?php echo "straat: " . $_SESSION['straat'] ?> <a name="wijzig" id="straat" href="adrespagina.php"> Wijzig </a></li>
			<li><?php echo "nummer: " . $_SESSION['nummer'] ?> <a name="wijzig" id="nummer" href="adrespagina.php"> Wijzig </a></li>
			<li><?php echo "gemeente: " . $_SESSION['gemeente'] ?> <a name="wijzig" id="gemeente" href="adrespagina.php"> Wijzig </a></li>
			<li><?php echo "postcode: " . $_SESSION['postcode'] ?> <a name="wijzig" id="postcode" href="adrespagina.php"> Wijzig </a></li>
		<ul>
</body>
</html>			