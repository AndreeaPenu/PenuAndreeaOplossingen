<?php
	session_start();

	$id=null;

	if (isset($_GET['id'])){
		$id = $_GET['id'];
	}


	//als deel1 bestaat
	if(isset($_SESSION["deel1"])){
		$email = $_SESSION["deel1"]["email"];
		$nickname = $_SESSION["deel1"]["nickname"];
	}
	

?>
<!DOCTYPE html>
<html>
<head>
	<style>
		input[type=text]:focus,input[type=number]:focus{
			border:1px solid rgba(81, 203, 238, 1);
		}
	</style>
</head>
<body>
		<h1>Deel1: registratiegegevens</h1>
		<form action="adrespagina.php" method="post">
			<ul>
				<li>
					<label for="email">e-mail</label>
					<input type="text" name="email" id="email" value="<?=$email?>" <?php echo ($id=="email") ? 'autofocus' : '' ?>>
				</li>
				<li>
					<label for="nickname">nickname</label>
					<input type="text" name="nickname" id="nickname" value="<?=$nickname?>"  <?php echo ($id=="nickname") ? 'autofocus' : '' ?>>
				</li>
			</ul>
			<input type="submit" name="submit" value="Volgende">
		</form>
</body>
</html>
