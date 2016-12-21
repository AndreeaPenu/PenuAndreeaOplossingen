<?php

	session_start();






	

	



	//fouten in session var
	//$fout = $_SESSION['error'];
	$email = $_SESSION['email'];
	$boodschap = $_SESSION['boodschap'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>contactformulier</title>
</head>
<body>


	<form aciton="contact.php" method="POST" id="contactform">
		<label for="email">E-mailadres</label>
		</br>
		<input id="email" type="text" name="email" value="<?=$email?>">
		</br>
		<label for="boodschap">Boodschap</label>
		</br>
		<textarea rows="8" cols="30" id="boodschap" name="boodschap" value="<?=$boodschap?>"></textarea>
		</br>
		<input for="kopie" type="checkbox">
		<label id="kopie" name="kopie">Stuur een kopie naar mijzelf</label>
		</br>
		<input type="submit" name="submit" value="Submit Query">
	</form>




<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script>

		//ready method
		$(document).ready(function(){
   		 	$('#contactform').submit(function(){
   		 		
   		 		//haal de data op van alle input velden
   		 		event.preventDefault();
  				formData=( $( this ).serialize() );


  				//ajax call
  				$.ajax({

					type: 'POST',
					url: 'contact-api.php',
					data: formData,
					success: function(data) {

							parsedData	=	JSON.parse(data);

								$('.placeholder').append('<p>' + parsedData['type'] + '<p>');

							}


							

				});


   		 		return false;

   		 	})

		})
	</script>
</body>
</html>