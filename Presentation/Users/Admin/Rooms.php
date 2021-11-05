<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../CSS/Style.css">
    <link rel="stylesheet" href="../../CSS/room.css">
    <style>
        
    </style>

</head>

<body>
    <div class="header">
        <h1>Arogya Health Care Hospital Management System</h1>

    </div>

    <div>
        <ul class="activenav">
            <li class="nav"><a href="Admin.php">Dashboard</a></li>
            <li class="nav"><a href="Staff.php">Staff</a></li>
            <li class="nav"><a class="active" href="Rooms.php">Rooms</a></li>
            <li id="navlog"><a href="../../src/logout.php">Log out</a></li>
        </ul>
    </div>


    <div class="row">

        <div class="column">
            <h2 >Add Room</h2>
            <form action="../../src/Admin/addroom.php" method="post">
                <table>

                    <tr>
                        <td>
                            <label class="label" for="name">Room name</label>
                        </td>
                        <td>
                            <input type="text" class="inputs" name="room_name">
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <label for="name" class="label">Room type</label>
                        </td>
                        <td>

                            <select class="inputs" name="type">
                                <option value="Consulting room">Consulting room</option>
                                <option value="Operating room">Operating room</option>
                                <option value="Sick room">Sick room</option>
                            </select>

                        </td>
                    </tr>

                    <tr>

                        <td colspan="2" style="text-align: center;">
                            <input class="button" type="submit" value="Add room"></input>
                        </td>
                    </tr>
                </table>
            </form>
        </div>

        <div class="column">
            <h2 align="center">All Rooms</h2>


            <table class="table">
                <tr>
                    <th>Room_ID</th>
                    <th>Designation</th>
                    <th>Type</th>

                </tr>
                <?php
                //session_start();// start session

                include("../../src/dbconnection.php"); // import db connection details



                $sql1 = "select * from  rooms"; // sql query for che

                $r1 = $conn->query($sql1);

                while ($row1 = $r1->fetch_assoc()) {


                ?>

                    <tr>
                        <td><?php echo $row1["room_ID"]; ?></td>
                        <td><?php echo $row1["Designation"]; ?></td>
                        <td><?php echo $row1["Type"]; ?></td>


                    </tr>


                <?php } ?>
            </table>
        </div>

    </div>

    <div class="footer" style="margin-top: 100px;">
        <p>Copyright © Arogya Health Care. All rights reserverd.</p>
        <p>Solution by Apex Design Works</p>
    </div>

</body>

</html>