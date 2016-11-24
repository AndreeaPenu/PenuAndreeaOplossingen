<?php

$kortingscode = '';



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


				throw new Exception( $e->getMessage() );
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
	<label for="kortingscode">Kortingscode</label>
	<input id="kortingscode" name="kortingscode" type="text">
	<input type="submit"></input>
</body>
</html>