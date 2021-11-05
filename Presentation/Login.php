<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>

    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/login.css">
</head>

<body>
    <div class="header">
        <h1>Arogya Health Care Hospital Management System</h1>
    </div>

    <div id="main">
        <form action="src/loginAction.php" method="post">


            <table id="table">
                <tr>
                    <td>
                        <p id="login">WELCOME</p>
                    </td>

                </tr>
                <tr>
                    <td id="Emailtd">
                        <input id="Email" type="text" name="Email" onkeydown="emailcheck()" placeholder="Email" autocomplete="off" required>
                    </td>
                </tr>
                <tr>
                    <td id="passtd">
                        <input id="Pass" type="password" name="Pass" onkeydown="passcheck()" placeholder="Password" required>
                    </td>
                </tr>
                <tr>
                    <td><a id="forgot" href="">Forgot password? </a></td>
                </tr>

                
                <tr>
                    <td id="button1"><input id="buttonlog" disabled="true" type="submit" value="Log in"></input></td>
                </tr>

                <tr>
                    <td id="button2"><button class="button" onclick="location.href='Register.php'" type="button">Register</button></td>
                </tr>

                <tr>
                    <td><a class="home" href="index.php">Back to Home </a></td>
                </tr>

            </table>



        </form>
    </div>

    <div class="footer">
        <p>Copyright © Arogya Health Care. All rights reserverd.</p>
        <p>Solution by Apex Design Works</p>
    </div>




    <script src="JS/validate.js"></script>
</body>


</html>