<?php

	$timestamp = mktime(10,35,25,1,21,1904);
	$date = date('d F Y,h:i:s a',$timestamp);

?>


<!DOCTYPE html>
<html>
<head>

</head>
<body>


	<p> <?php echo $date ?> </p>

</body>
</html>