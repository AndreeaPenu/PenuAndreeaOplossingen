<?php 
	//check of ze is opgeroepen door ajax-request


	if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
	{


		//controlleer of de juiste post variabelen geset zijn


		if (isset($_POST['submit']))
		{

			$email	=	$_POST['email'];
			$boodschap = $_POST['boodschap'];


			$ajaxMessage['type'] = 'success'; //bevat key type met als waarde success.
			$jsonData = json_encode($ajaxMessage);
			echo $jsonData;

		}

	}


 ?>