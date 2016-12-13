<?php
	session_start();
	//setcookie('','',time()-);
	echo $_SESSION['notification'] = 'U bent uitgelogd. Tot volgende keer';

	//redirect naar login-form.php
	//header('location: login-form.php');

?>