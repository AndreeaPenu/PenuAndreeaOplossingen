<?php
	session_start();

	$id=null;

	if (isset($_GET['id'])){
		$id = $_GET['id'];
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
					<input type="text" name="email" id="email" value="" <?php echo ($id=="email") ? 'autofocus' : '' ?>>
				</li>
				<li>
					<label for="nickname">nickname</label>
					<input type="text" name="nickname" id="nickname" value=""  <?php echo ($id=="nickname") ? 'autofocus' : '' ?>>
				</li>
			</ul>
			<input type="submit" name="submit" value="Volgende">
		</form>
</body>
</html>
