<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="CSS/Style.css">
    <link rel="stylesheet" href="CSS/homestyle.css">
    <link rel="stylesheet" href="CSS/slide.css">
</head>

<body>
    <div class="header">
        <h1>Arogya Health Care</h1>
        <!-- <a id="headername" href="index.php">Arogya Health Care</a> -->
    </div>
    <div>
        <ul class="activenav">
            <li class="nav"><a class="active" href="index.php">Home</a></li>
            <li class="nav"><a href="About.php">About Us</a></li>
            <li class="nav"><a href="Contact.php">Contact Us</a></li>
            <li id="navlog"><a href="Login.php">Sign in/Register</a></li>
        </ul>
    </div>



    <div>
        <div class="slideshow-container">

            <div class="mySlides fade">
                <!-- <div class="numbertext">1 / 3</div> -->
                <img src="Images/Slide11.jpg" style="width:100%">
                <div class="text">Covid-19 Vaccination Available</div>
            </div>

            <div class="mySlides fade">
                <!-- <div class="numbertext">2 / 3</div> -->
                <img src="Images/Slide22.jpg" style="width:100%">
                <div class="text">Best Health Care Professionals</div>
            </div>

            <div class="mySlides fade">
                <!-- <div class="numbertext">3 / 3</div> -->
                <img src="Images/Slide33.jpg" style="width:100%">
                <div class="text">State Of The Art Surgery Rooms</div>
            </div>

            <div class="mySlides fade">
                <!-- <div class="numbertext">1 / 3</div> -->
                <img src="Images/Slide44.jpg" style="width:100%">
                <div class="text">Accomdation For You And Your Loved Ones</div>
            </div>

            <div class="mySlides fade">
                <!-- <div class="numbertext">1 / 3</div> -->
                <img src="Images/Slide55.jpg" style="width:100%">
                <div class="text">Ample Parking Space</div>
            </div>

            <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
            <a class="next" onclick="plusSlides(1)">&#10095;</a>

        </div>
        <br>

        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
            <span class="dot" onclick="currentSlide(4)"></span>
            <span class="dot" onclick="currentSlide(5)"></span>
        </div>
    </div>

    <div>
        <table class="table">

            <tr>
                <td>
                    <h1>Why Us?</h1>
                    <div class="para">
                        Arogya Health Care is committed to being a compassionate, efficient, dynamic and
                        affordable private healthcare service provider.Our patients receive the best nursing
                        care thanks to our well experienced nursing staff.

                        Stringent quality standards combined with heartfelt nursing care help ensure that patients
                        receive the best experience.This is one of the many reasons why medical professionals
                        across Sri Lanka place their trust in Arogya Health Care to ensure the patient satisfaction.

                        With a reputation of over 10 years Arogya Health Care is well reputed for its mother & baby
                        care. Ensuring you and your new born is in good health is a commitment given by the hospital
                        along with specialized and heartfelt care to make sure you live more and celebrate life.
                    </div>
                </td>
            </tr>

            <tr>
                <td>
                    <h2 style="text-align: left;">The hospital’s services include:</h3>
                </td>
            </tr>

            <tr>
                <td>
                    <ul style="list-style-type:disc;">
                        <li class="serv">Critical care wards</li>
                        <li class="serv">Three well-equipped operating theatres</li>
                        <li class="serv">24-hour fully computerised modern pathology laboratory</li>
                        <li class="serv">9-bed intensive care unit (ICU)</li>
                        <li class="serv">E-channelling consultation</li>
                        <li class="serv">24-hour emergency medical service unit</li>
                        <li class="serv">24-hour out-patient (OPD) service</li>
                        <li class="serv">X-ray with image intensifying and screening facilities</li>
                        <li class="serv">Periodic medical check-up scheme</li>
                        <li class="serv">An emergency health care service available to registered customers</li>

                    </ul>
                </td>
            </tr>


        </table>




    </div>

    <button onclick="topFunction()" id="myBtn" title="Go to top">Back to Top</button>



    <div class="footer">
        <p>Copyright © Arogya Health Care. All rights reserverd.</p>
        <p>Solution by Apex Design Works</p>
    </div>


    <script src="JS/scrollup.js"></script>
    <script src="JS/slide.js"></script>

</body>

</html>