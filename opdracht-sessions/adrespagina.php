
<?php
	session_start();

	$id=null;

	if (isset($_POST['submit'])) { 
			$_SESSION['deel1']['email'] = $_POST['email']; //wanneer op submit geklikt steek email in session
			$_SESSION['deel1']['nickname'] = $_POST['nickname'];		
	} 



	if(isset($_SESSION['deel2'])){

			$straat = $_SESSION['deel2']['straat'];
			$nummer = $_SESSION['deel2']['nummer'];	
			$gemeente = $_SESSION['deel2']['gemeente'];
			$postcode = $_SESSION['deel2']['postcode'];	
	

	}

	if(isset($_SESSION['deel1'])){
		$email = $_SESSION['deel1']['email'];
		$nickname = $_SESSION['deel1']['nickname'];
	}





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
		<h2>Registratiegegevens</h2>
		<ul>
			<li><?php echo "e-mail: " . $email ?></li>
			<li><?php echo "nickname: " . $nickname ?></li>
		<ul>
		<h2>Deel2: adres</h2>
		
		<form action="overzichtspagina.php" method="post">
			<ul>
				<li>
					<label for="straat">straat</label>
					<input type="text" name="straat" id="straat" value="<?=$straat?>" <?php echo ($id=="straat") ? 'autofocus' : '' ?>>
				</li>
				<li>
					<label for="nummer">nummer</label>
					<input type="number" name="nummer" id="nummer" value="<?=$nummer?>" <?php echo ($id=="nummer") ? 'autofocus' : '' ?>>
				</li>
				<li>
					<label for="gemeente">gemeente</label>
					<input type=	"text" name="gemeente" id="gemeente" value="<?=$gemeente?>" <?php echo ($id=="gemeente") ? 'autofocus' : '' ?>>
				</li>
				<li>
					<label for="postcode">postcode</label>
					<input type="text" name="postcode" id="postcode" value="<?=$postcode?>" <?php echo ($id=="postcode") ? 'autofocus' : '' ?>> 
				</li>
			</ul>
			<input type="submit" name="submit" value="Volgende">
		</form>
		<a href="vernietig.php">Vernietig</a>
</body>
</html>