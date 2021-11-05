<?php //declare(strict_types=1); ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Database connection</title>
</head>

<body>
	<?php
	$servername ="localhost";
	$username ="root";
	$password ="";
	$dbname="hms";
	
	$conn=new mysqli($servername,$username,$password,$dbname);
		
	if ($conn->connect_error)
	{
		die ("Connection failed: ".$conn->connect_error);		
	}		
	?>
</body>
</html>