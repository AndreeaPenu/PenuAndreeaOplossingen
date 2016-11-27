<?php

$kortingscode = '';
$message	=	false;	

$messageCode;
$createMessage =false;



try
	{
		if ( isset ( $_POST['submit'] ) )
		{
			try
			{
				if ( $_POST['kortingscode'] == '' )
				{
					throw new Exception( 'SUBMIT-ERROR' );
				}
				else
				{
					$kortingscode	=	$_POST['kortingscode'];
				}
			}
			catch( Exception $e )
			{



				$message['type']	=	'error';
				$message['text']	=	$e->getMessage();

				$date	=	'[' . date( 'H:i:s', time() ).']';

				$errorString	=	$date . ' ' . $message['text'] . "\n\r";

				file_put_contents( 'log.txt', $errorString, FILE_APPEND );

			}
			
		}
	}
	catch ( Exception $e )
	{
		$message['type']	=	'error';
		$message['text']	=	$e->getMessage();

	}



?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>

<body>
	<h2>Geef uw kortingscode op</h2>


	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="POST">
		<label for="kortingscode">Kortingscode</label>
		<input id="kortingscode" name="kortingscode" type="text">
		<input type="submit" name="submit"></input>
	</form>
</body>
</html>