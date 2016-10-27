<?php
	session_start();

	//check of er op submit geklikt is 
	if (isset($_POST['submit'])) { 
			$_SESSION['deel2']['straat'] = $_POST['straat']; //inhoud waarvan name overeenstemt in session steken
			$_SESSION['deel2']['nummer'] = $_POST['nummer'];
			$_SESSION['deel2']['gemeente'] = $_POST['gemeente'];
			$_SESSION['deel2']['postcode'] = $_POST['postcode'];	
	} 


	//kijk of deel1 session bestaat

	if(isset($_SESSION['deel1'])){
			$email = $_SESSION['deel1']['email']; //vul in
			$nickname = $_SESSION['deel1']['nickname'];
	}
	
	if(isset($_SESSION['deel2'])){
			$straat = $_SESSION['deel2']['straat'];
			$nummer = $_SESSION['deel2']['nummer'];
			$gemeente = $_SESSION['deel2']['gemeente'];
			$postcode = $_SESSION['deel2']['postcode'];	
	}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h2>Registratiegegevens</h2>
		<ul>
			<li><?php echo "e-mail: " . $email ?> <a id="email" href="registratiepagina.php?id=email"> Wijzig </a></li>
			<li><?php echo "nickname: " . $nickname ?> <a id="nickname" href="registratiepagina.php?id=nickname"> Wijzig </a></li>
			<li><?php echo "straat: " . $straat ?> <a id="straat" href="adrespagina.php?id=straat"> Wijzig </a></li>
			<li><?php echo "nummer: " . $nummer ?> <a id="nummer" href="adrespagina.php?id=nummer"> Wijzig </a></li>
			<li><?php echo "gemeente: " . $gemeente ?> <a id="gemeente" href="adrespagina.php?id=gemeente"> Wijzig </a></li>
			<li><?php echo "postcode: " . $postcode ?> <a id="postcode" href="adrespagina.php?id=postcode"?> Wijzig </a></li>
		<ul>
</body>
</html>			