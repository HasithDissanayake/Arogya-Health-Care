<?php include '../dbconnection.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Add room action</title>
</head>

<body>
	<?php	
	$Designation = $_POST["room_name"];
	$Type= $_POST["type"];
	
	
	$sql = "INSERT INTO rooms(Designation,Type) VALUES 
	('".$Designation."','".$Type."') ";
	
	
	
	if ($conn->query($sql)=== TRUE){
		echo "<script>alert('New room insertion successful')</script>";
		echo "<script >window.location = '../../Users/Admin/Rooms.php'</script>";
	}
	else{
		
		echo "Error".$sql."<br>".$conn->error;
	}
	$conn->close();
		
		?>
</body>
</html>