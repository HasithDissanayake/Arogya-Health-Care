<?php include 'dbconnection.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Register action</title>
</head>

<body>
	<?php	
	$Fname = $_POST["fname"];
	$Lname= $_POST["lname"];
	$Sex= $_POST["sex"];
	$Email = $_POST["Email"];
	$Contact= $_POST["contact"];
    $Address= $_POST["address"];
    $DOB= $_POST["dob"];
	$Password = $_POST["pass"];;
	$Type="patient";
	
	$sql = "INSERT INTO patient(FName,LName,Sex,Contact,Address,DOB,Email,Password) VALUES 
	('".$Fname."','".$Lname."','".$Sex."','".$Contact."','".$Address."','".$DOB."','".$Email."','".$Password."') ";
	
	$sql2 = "INSERT INTO login(Email,Password,Type) VALUES 
	('".$Email."','".$Password."','".$Type."') ";
	
	if ($conn->query($sql)=== TRUE && $conn->query($sql2)=== TRUE){
		echo "<script> alert('Registration Successful')</script>";
		echo "<script >window.location = '../Login.php'</script>";
	}
	else{		
		echo "Error".$sql."<br>".$conn->error;
	}
	$conn->close();		
	?>
</body>
</html>