<?php


	$rijen = 10;
	$kolommen = 10;

	
	

	
?>


<style>
	table{
		border:1px solid black;
		
	}
	td{
		border:1px solid black;
		
	}

	.oneven{
		background-color:green;
	}
</style>
<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<table>


			<?php for( $i = 0; $i < $rijen; $i++): ?>
					 <tr>
					 	<?php for ($y=0;$y<=$kolommen;$y++): ?>
					 		<td class="<?= ( ( $i * $y ) % 2 > 0 ) ? 'oneven' : '' ?>"><?= $i*$y?></td>
					 	<?php endfor ?>
					 </tr>

			<?php endfor ?>


		</table>
		
		
	

	</body>
</html>