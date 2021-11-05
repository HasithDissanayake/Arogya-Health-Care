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
	 
	 $ID= $_POST["ID"];	
	
	$sql ="Delete from staff where staff_ID='".$ID."' ";
	
	if ($conn->query($sql)=== TRUE  ){
		echo "<script>alert('Record deleted successfully')</script>";
		echo "<script >window.location = '../../Users/Admin/Staff.php'</script>";
	}
	else{		
		echo "Error".$sql."<br>".$conn->error;
	}
	$conn->close();		
	?>
</body>
</html>