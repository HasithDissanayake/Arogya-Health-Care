<?php include '../dbconnection.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add room action</title>
</head>

<body>
	<?php	
	$Name = $_POST["Name"];
    $Email = $_POST["Email"];
	$Type= $_POST["type"];
	
	
	$sql = "INSERT INTO staff(Name,Email,Type) VALUES 
	('".$Name."','".$Email."','".$Type."') ";
	
	
	
	if ($conn->query($sql)=== TRUE){
		echo "<script>alert('New staff member added')</script>";
		echo "<script >window.location = '../../Users/Admin/Staff.php'</script>";
	}
	else{
		
		echo "Error".$sql."<br>".$conn->error;
	}
	$conn->close();
		
		?>
</body>
</html>