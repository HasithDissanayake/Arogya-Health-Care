<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/contact.css">

</head>

<body>
    <div class="header">
        <h1>Arogya Health Care</h1>
    </div>
    <div>
        <ul class="activenav">
            <li class="nav"><a href="index.php">Home</a></li>
            <li class="nav"><a href="About.php">About Us</a></li>
            <li class="nav"><a class="active" href="Contact.php">Contact Us</a></li>
            <li id="navlog"><a href="Login.php">Sign in/Register</a></li>
        </ul>
    </div>

    <div>
        
        <table class="table">

        <tr>
            <td><h1>Contact Us</h1></td>
        </tr>

            <tr>
                <td>

                    <P>
                        Arogya Health Care,<br>
                        Negombo Rd,<br>
                        Colombo 2,<br>
                        Sri Lanka.<br>
                    </P>

                </td>

                <td>
                    <p>Genaral Line: +94112259453<br>
                        Channeling Hotline: +94112254321<br>
                        Fax: +94112259865<br>
                        Email: arogya@slt.lk<br>

                    </p>
                </td>
            </tr>
        </table>




        <div class="map">
            <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15831.441197177928!2d79.915962!3d7.256736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcacf30841ceb4c1!2sArogya%20Family%20Health%20Care!5e0!3m2!1sen!2slk!4v1627741809769!5m2!1sen!2slk" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe> -->
            <iframe class="iframe" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15831.441197177928!2d79.915962!3d7.256736!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xdcacf30841ceb4c1!2sArogya%20Family%20Health%20Care!5e0!3m2!1sen!2slk!4v1627741809769!5m2!1sen!2slk" frameborder="0" allowfullscreen></iframe>
        </div>



        <div class="container">
            <form action="/action_page.php">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" placeholder="Your name..">

                <label for="Email">Email</label>
                <input type="email" id="email" name="email" placeholder="Your email address..">

                <label for="tel">Telephone</label>
                <input type="tel" id="tel" name="tel" placeholder="Your contact number..">


                <label for="message">Message</label>
                <textarea id="message" name="message" placeholder="What is your inquiry?" style="height:200px"></textarea>

                <input type="submit" value="Submit">
            </form>
        </div>


    </div>


    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>


    <div class="footer">
        <p>Copyright © Arogya Health Care. All rights reserverd.</p>
        <p>Solution by Apex Design Works</p>
    </div>


    <script src="JS/scrollup.js"></script>

</body>

</html>