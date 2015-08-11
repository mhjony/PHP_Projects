<!DOCTYPE html>
<html>
<head>
	<title>Connect</title>
</head>
<body>
		
	<?php
		mysql_connect("localhost","root","") or die (mysql_error());
		mysql_select_db ("test_db");
		//echo "Connected";
	?>

</body>
</html>