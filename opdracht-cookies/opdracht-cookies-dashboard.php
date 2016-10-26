<?php


		if (isset($_GET['uitloggen'])){
			setcookie('test','',time()-360);
		}
?>
<!DOCTYPE html>
<html>
<head>
</head>
<body>
		<h1>Dashboard</h1>
		<p>U bent ingelogd.</p>
	</br>
		<a href="opdracht-cookies-dashboard.php?uitloggen=true">Uitloggen</a>
</body>
</html>
