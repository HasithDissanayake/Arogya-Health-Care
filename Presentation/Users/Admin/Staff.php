<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="../../CSS/Style.css">
    <link rel="stylesheet" href="../../CSS/room.css">


</head>

<body>
    <div class="header">
        <h1>Arogya Health Care Hospital Management System</h1>

    </div>

    <div>
        <ul class="activenav">
            <li class="nav"><a href="Admin.php">Dashboard</a></li>
            <li class="nav"><a class="active" href="Staff.php">Staff</a></li>
            <li class="nav"><a href="Rooms.php">Rooms</a></li>
            <li id="navlog"><a href="../../src/logout.php">Log out</a></li>
        </ul>
    </div>

    <div class="row">

        <div class="column">
            <h2>Add staff member</h2>
            <form action="../../src/Admin/staff.php" method="post">
                <table>

                    <tr>
                        <td>
                            <label class="label" for="name">Name</label>
                        </td>
                        <td>
                            <input type="text" class="inputs" name="Name">
                        </td>

                    </tr>
                    <tr>
                        <td>
                            <label class="label" for="email">Email</label>
                        </td>
                        <td>
                            <input type="text" class="inputs" name="Email">
                        </td>

                    </tr>

                    <tr>
                        <td>
                            <label for="name" class="label">Staff type</label>
                        </td>
                        <td>

                            <select class="inputs" name="type">
                                <option value="Doctor">Doctor</option>
                                <option value="Nurse">Nurse</option>

                            </select>

                        </td>
                    </tr>

                    <tr>

                        <td colspan="2" style="text-align: center;">
                            <input class="button" type="submit" value="Add"></input>
                        </td>
                    </tr>
                </table>
            </form>




            <h2>Delete staff member</h2>
            <form action="../../src/Admin/staffdelete.php" method="post">
                <table>

                    <tr>
                        <td>
                            <label class="label" for="ID">ID</label>
                        </td>
                        <td>
                            <input type="text" class="inputs" name="ID">
                        </td>

                    </tr>                   

                    <tr>

                        <td colspan="2" style="text-align: center;">
                            <input class="button" type="submit" value="Delete"></input>
                        </td>
                    </tr>
                </table>
            </form>


        </div>

        <div class="column">
            <h2 align="center">All Staff</h2>


            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Type</th>
                </tr>
                <?php                

                include("../../src/dbconnection.php"); // import db connection details

                $sql1 = "select * from  staff"; // sql query for retrieving staff details

                $r1 = $conn->query($sql1);
                while ($row1 = $r1->fetch_assoc()) {
                ?>

                    <tr>
                        <td><?php echo $row1["staff_ID"]; ?></td>
                        <td><?php echo $row1["Name"]; ?></td>
                        <td><?php echo $row1["Email"]; ?></td>
                        <td><?php echo $row1["Type"]; ?></td>
                    </tr>

                <?php
             }
            ?>
            </table>
        </div>

    </div>

    <div class="footer" style="margin-top: 40px;">
        <p>Copyright © Arogya Health Care. All rights reserverd.</p>
        <p>Solution by Apex Design Works</p>
    </div>

</body>

</html>

</body>

</html>