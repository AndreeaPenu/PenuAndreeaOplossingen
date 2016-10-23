
<?php
	session_start();

	$id = null;
	$idVergelijk = null;

	if (isset($_POST['submit'])) { 
			$_SESSION['email'] = $_POST['email'];
			$_SESSION['nickname'] = $_POST['nickname'];		
	} 


	if (isset($_POST['wijzig'])){
		$id = $_GET['id'];
	}
	
	$idVergelijk = $_GET['id'];

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
		<h2>Registratiegegevens</h2>
		<ul>
			<li><?php echo "e-mail: " . $_SESSION['email'] ?></li>
			<li><?php echo "nickname: " . $_SESSION['nickname'] ?></li>
		<ul>
		<h2>Deel2: adres</h2>
		<p><?php echo $id . $idVergelijk ?></p>
		<form action="overzichtspagina.php" method="post">
			<ul>
				<li>
					<label for="straat">straat</label>
					<input type="text" name="straat" id="straat" value="" "<?php echo ($id==$idVergelijk) ? 'autofocus' : '' ?>" >
				</li>
				<li>
					<label for="nummer">nummer</label>
					<input type="number" name="nummer" id="nummer" value="" "<?php echo ($id==$idVergelijk) ? 'autofocus' : '' ?>">
				</li>
				<li>
					<label for="gemeente">gemeente</label>
					<input type=	"text" name="gemeente" id="gemeente" value="" "<?php echo ($id==$idVergelijk) ? 'autofocus' : '' ?>">
				</li>
				<li>
					<label for="postcode">postcode</label>
					<input type="text" name="postcode" id="postcode" value="" "<?php echo ($id==$idVergelijk) ? 'autofocus' : '' ?>"> 
				</li>
			</ul>
			<input type="submit" name="submit" value="Volgende">
		</form>
		<a href="vernietig.php">Vernietig</a>
</body>
</html>