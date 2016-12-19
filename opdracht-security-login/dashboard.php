<?php

//controlleer of cookie met login geset is
if(!isset($_COOKIE["login"])) {
    //echo "Cookie is not set!";
    $_SESSION['errormsg']= "U moet eerst inloggen";
    //niet-> redirect naar login-form.php
	header("Location: login-form.php");
}

//explode uitvoeren (scheidignsteken cookie)
//[0]email [1]hash
//haal de salt op die bij het email adres hoort
//congrolleer of de hash van email + salt uit database = hash in cookie

//ja-> inhoud van dashboard tonen
//nee-> cookie unset
//header("Location: login-form.php");

?>


<html>
<head>
	<title></title>
</head>
<body>
	<h1>Dashboard</h1>
	<a href="logout.php">Uitloggen</a>
</body>
</html>