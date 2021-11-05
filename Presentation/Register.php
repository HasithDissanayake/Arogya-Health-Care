<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>

    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/register.css">
    
</head>

<body>
    <div class="header">
        <h1>Arogya Health Care Hospital Management System</h1>
    </div>




    <form action="src/registerAction.php" method="post">

        <div id="register">
        <p id="loginbanner">Register Form</p>
            <div class="row">
                

                <div class="column">
                    <table id="table">
                        <!-- <tr>
                        <td>
                            <p id="loginbanner">Register Form</p>
                        </td>

                    </tr> -->
                        <tr>
                            <td class="inputstd">
                                <input class="inputs" type="text" name="fname" placeholder="First name" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="inputstd">
                                <input class="inputs" type="text" name="lname" placeholder="Last name" required>
                            </td>
                        </tr>

                        <tr>
                            <td class="inputstd">
                                <select class="inputs" name="sex">
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td class="inputstd">
                                <input class="inputs" type="text" name="contact" placeholder="Contact number" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="inputstd">
                                <input class="inputs" type="text" name="address" placeholder="Address" required>
                            </td>
                        </tr>
                    </table>

                </div>

                <div class="column">
                    <table id="table">
                        <tr>
                            <td class="inputstd">
                                <input class="inputs" type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="inputstd">
                                <input class="inputs" type="text" name="Email" placeholder="Email" required>
                            </td>
                        </tr>
                        <tr>
                            <td class="passtd">
                                <input id="Pass" type="password" name="pass" placeholder="Password" required>
                            </td>
                        </tr>

                        <tr>
                            <td class="passtd">
                                <input id="CPass" type="password" name="cpass" placeholder="Confirm Password" required>
                            </td>
                        </tr>



                        <tr>
                            <td id="button4"><input class="button" type="submit" value="Register"></input></td>
                        </tr>

                        <tr>
                            <td><a class="home" href="Login.php">Log in </a></td>
                        </tr>



                    </table>
                </div>
            </div>
        </div>

    </form>




    <div class="footer">
        <p>Copyright © Arogya Health Care. All rights reserverd.</p>
        <p>Solution by Apex Design Works</p>
    </div>

    <script src="JS/confirmpass.js"></script>
</body>


</html>