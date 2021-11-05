<?php
session_start();
include("dbconnection.php");

$sql1 = "select * from  login where Email='" . $_REQUEST['Email'] . "' AND Password='" . $_REQUEST['Pass'] . "' ";

$r1 = $conn->query($sql1);

while ($row1 = $r1->fetch_assoc()) {

    $_SESSION["useremail"] = $_REQUEST['Email'];

    $type = $row1["Type"];

    if ($type == "patient") {
        echo "<script >window.location = '../Users/Patient/Myprofile.php'</script>";
    }
    else if ($type == "receptionist") {
        echo "<script >window.location = '../Users/Receptionist/Reception.php'</script>";
    }
    else if ($type == "headnurse") {
        echo "<script >window.location = '../Users/Headnurse/Headnurse.php'</script>";
    }
    else if ($type == "doctor") {
        echo "<script >window.location = '../Users/Doctor/Doctor.php'</script>";
    }
    else {
        echo "<script >window.location = '../Users/Admin/Admin.php'</script>";
    }
}
echo "<script> alert ('Please Check your User Email  or Password')</script>";
echo "<script >window.location = '../Login.php'</script>";
?>
