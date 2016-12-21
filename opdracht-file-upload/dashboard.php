<?php
session_start();
$ok = false;
//controlleer of cookie met login geset is
if(!isset($_COOKIE["login"])) {//niet geset
    //echo "Cookie is not set!";
    $_SESSION['notification']= "U moet eerst inloggen";
    //niet-> redirect naar login-form.php
	header("Location: login-form.php");
}else{//wel geset
	$cookieExpl = explode(',', $_COOKIE['login']);
	$explEmail = $cookieExpl[0]; //key voor email
	$explHash = $cookieExpl[1]; //key voor hash

	$db = new PDO('mysql:host=localhost;dbname=opdracht-security-login', 'root', 'root', array (PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION)); // Connectie maken

	//haal salt op
	$select = "SELECT salt
				FROM users
				WHERE email = :email";

	$statement = $db->prepare($select);
	$statement->bindValue(':email', $explEmail);
	$statement->execute();

	//controlleer of overeen komt
	$email_salt = (uniqid(mt_rand(),true))+$explEmail;
	$email_hash = md5($email_salt); 

	if($email_salt == $explHash){
		//inhoud dashboard weergeven
		$ok = true;
	}else{
		//unset cookie
		setcookie($cookie_name, $cookie_value, time() - (86400 * 30));
	}

}



?>


<html>
<head>
	<title></title>
</head>
<body>
	<p><a href="dashboard.php">Terug naar dashboard</a> | Ingeloegd als <?php=$email?> | <a href="logout.php">Uitloggen</a></p>
	<h1>Dashboard</h1>
	<a href="#">Artikels</a>
	<a href="gegevens-wijzigen-form.php">Gegevens wijzigen</a>
</body>
</html>