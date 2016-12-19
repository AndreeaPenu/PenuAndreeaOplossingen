<?php
	session_start();
	//setcookie('','',time()-);
	setcookie($cookie_name, $cookie_value, time() - (86400 * 30), ",");

	echo $_SESSION['notification'] = 'U bent uitgelogd. Tot volgende keer';

	//redirect naar login-form.php
	header('location: login-form.php');

?>