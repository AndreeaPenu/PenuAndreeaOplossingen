<?php
	


	function __autoload($classname) {
    $filename = "./classes/". $classname .".php";
    include_once($filename);
	}	

	

	$percent = new Percent(150,100);

	$absolute = $percent->absolute;
	$relative = $percent->relative;
	$hundred = $percent->hundred;
	$nominal = $percent->nominal;
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">

    <style>

    	table,td {
    		border: 1px solid black;
    		border-collapse: collapse;
		}
		td {
    		padding: 5px;
    		text-align: left;
		}
    	
    </style>
</head>
<body>
			<h2>Hoeveel procent is 150 van 100?</h2>

			<table>
				<tr>
					<td>
						Absoluut
					</td>
					<td>
						<?= $percent->formatNumber($absolute) ?>
					</td>
				</tr>

				<tr>
					<td>
						Relatief
					</td>
					<td>
						<?= $percent->formatNumber($relative) ?>
					</td>
				</tr>

				<tr>
					<td>
						Geheel getal
					</td>
					<td>
						<?= $percent->formatNumber($hundred) ?>%
					</td>
				</tr>

				<tr>
					<td>
						Nominaal
					</td>
					<td>
						<?= $nominal ?>
					</td>
				</tr>

			</table>
</body>
</html>