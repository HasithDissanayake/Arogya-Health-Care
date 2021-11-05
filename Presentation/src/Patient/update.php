<?php 
session_start();
include '../dbconnection.php'; ?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Untitled Document</title>
</head>

<body>
	<?php
		 
	$Contact= $_POST["contact"];
	$Password = $_POST["password"];
		
	$sql ="UPDATE patient SET  Contact='$Contact' where Email='".$_SESSION["useremail"]."' ";
	$sql1 ="UPDATE patient SET  Password='$Password' where Email='".$_SESSION["useremail"]."' ";	
	$sql2 ="UPDATE login SET Password='$Password' where Email='".$_SESSION["useremail"]."' ";
	
	if ($conn->query($sql)=== TRUE && $conn->query($sql1)=== TRUE && $conn->query($sql2)=== TRUE  ){		
		echo "<script>alert('Profile updated successfully')</script>";
		echo "<script >window.location = '../../Users/Patient/Myprofile.php'</script>";
		
	}
	else{
		
		echo "Error".$sql."<br>".$conn->error;
	}
	$conn->close();
		
	?>
</body>
</html>