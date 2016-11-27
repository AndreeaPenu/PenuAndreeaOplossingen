<?php


session_start();

$kortingscode = '';
$isValid = false;

try
	{
		if ( isset ( $_POST['submit'] ) )
		{
				if ( $_POST['kortingscode'] == '' )
				{
					throw new Exception( 'SUBMIT-ERROR' );
				}
				else
				{
					if(strlen($_POST['kortingscode']) !=8){
						throw new Exception('VALIDATION-CODE-LENGTH');
					}else{
						$isValid=true;
					}
					
				}		
		}
	}
	catch ( Exception $e )
	{

		$messageCode = $e->getMessage(); //spreekt e class aan en vangt error
		$message	=	array(); //boodschap en type ontvangen
		$createMessage = false; //boodschap in klasse zetten of niet

		//$message['type']	=	'error';
		//$message['text']	=	$e->getMessage();



		switch($messageCode){
			case 'SUBMIT-ERROR': $message['type'] = 'error';
								 $message['text'] = 'Er werd met het formulier geknoeid';
								 break;
			case 'VALIDATION-CODE-LENGTH': $message['type'] = 'error';
										   $message['text'] = 'De kortingscode heeft niet de juiste lengte';
										   $createMessage = true;
										   break;

		}


		if($createMessage == true){
			createMessage($message);
		}

		logToFile($message);	

	}


	function logToFile($message){
		//[11:12:53 08/08/2015] - 127.0.0.1 - type:[error] Kortingscode is niet correct

		$date	=	'[' . date( 'H:i:s', time() ). ' ' . date("d/m/Y").']';

		


		$errorString	=	$date . ' - ' . $_SERVER['REMOTE_ADDR'] . ' - type:[' . $message['type'] . "] " . $message['text'] . "\n\r";

		file_put_contents( 'log.txt', $errorString, FILE_APPEND );

	}

	function createMessage($message){


	//	$type = $_SESSION[ 'message' ][ 'type' ];
	//	$bericht = $_SESSION[ 'message' ][ 'message' ];



	}


	function showMessage(){

	}


?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>

<body>
	<h2>Geef uw kortingscode op</h2>

	

	<!-- if $isValid == true weergeef <p> met Korting toegekend! en hide form -->

	<?php if ( $isValid != true): ?>

	

		<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
			<label for="kortingscode">Kortingscode</label>
			<input id="kortingscode" name="kortingscode" type="text">
			<input type="submit" name="submit"></input>
		</form>
	<?php else: ?>
		<p>Korting toegekend!</p>
	<?php endif?>
</body>
</html>