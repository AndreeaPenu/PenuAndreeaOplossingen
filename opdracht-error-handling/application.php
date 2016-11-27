<?php

$kortingscode = '';

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
					
				}		
		}
	}
	catch ( Exception $e )
	{

		$messageCode; //spreekt e class aan en vangt error
		$message	=	array(); //boodschap en type ontvangen
		$createMessage = false; //boodschap in klasse zetten of niet

		$message['type']	=	'error';
		$message['text']	=	$e->getMessage();



		switch($messageCode){
			case 'SUBMIT-ERROR': $message['type'] = 'error';
								 $message['text'] = 'Er werd met het formulier geknoeid';
								 break;
			default:'default';

		}

		logToFile($message);	

	}


	function logToFile($message){
		//[11:12:53 08/08/2015] - 127.0.0.1 - type:[error] Kortingscode is niet correct

		$errorString	=	$date . ' ' . '-' . $message['type'] . " " . $message['text'] . "\n\r";

		file_put_contents( 'log.txt', $errorString, FILE_APPEND );

	}



?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>

<body>
	<h2>Geef uw kortingscode op</h2>

	
		<?php if ( $message ): ?>
		 	<div class="modal <?= $message[ 'type' ] ?>">
		 		<?= $message[ 'text' ] ?>
		 	</div>
		<?php endif ?>

	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		<label for="kortingscode">Kortingscode</label>
		<input id="kortingscode" name="kortingscode" type="text">
		<input type="submit" name="submit"></input>
	</form>
</body>
</html>