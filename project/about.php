<!-- the about page details the company and what the invoice search does which will help -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>About Tyre Town</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/aboutUsStyle.css">
    <link rel="stylesheet" href="css/constants.css">
</head>

<body class="background" title="background image of a car">
<!-- Navigation -->
<div class="row">
    <ul id="navBar" class="fixed-top">
        <li><a href="tyreTownHomePage.php">Search</a></li>
        <li><a href="invoiceResult.php">Result</a></li>
        <li><a href="about.php">About</a></li>
    </ul>
</div>

<div class="container">
    <div class="row">
        <!-- Contains Header for about page paragraph-->
        <div class="col-12 col-lg-12">
            <h2 id="aboutUs" class="text-center text-capitalize">About Us</h2>
        </div>
        <div class="col-12 col-lg-12 text-center align-self-center">
            <p id="aboutPara">
                <br/>
                Here at Tyre Town we do the best wheel alignments in New Zealand! <br />
                This site has been brought to you by Adrian, Matt and Sang.
                We have redesigned the website to give users an easier access to customer information, and
                to give users a friendlier experience while they are looking up invoice details and
                alignment information at work. While we believe in clean and good code and always expanding
                our knowledge, we also believe having correctly aligned wheels is
                essential for safe handling and braking; it can help to reduce driver fatigue and
                make you a better programmer.
                <br/>
                <br/>
            </p>
        </div>
    </div>


    <div class="row">
        <!-- Contains Header for how the website works paragraph -->
        <div class="col-12 col-lg-12">
            <h2 id="howWorks" class="header text-center text-capitalize align-self-center">How this website works</h2>
        </div>
        <div class="col-12 col-lg-12 text-center align-self-center">
            <p id="howWorksPara">
                <br/>
                This is Tyre Town's very own invoice search website! <br />
                Employees can now have quick and easy access by simply typing in a customer's invoice number
                into the search bar at the homepage or result screen. You can view the details of the customer's
                details in a way that's easy to find the information you are looking for.
                <br/>
                <br/>
            </p>
        </div>
    </div>

    <div class="row">
        <!-- Contains Header for the alignment result key paragraph -->
        <div class="col-12 col-lg-12">
            <h2 id="alignmentKey" class="header text-center text-capitalize align-self-center">Alignment Result Key</h2>
        </div>
        <div class="col-12 col-lg-12 text-center align-self-center">
            <p id="alignmentKeyPara">
                <br/>
                <span style="color:red"> Red </span> : the value doesn't meet the required target <br/>
                <span style="color:green"> Green </span> : the value meets the required target <br/>
                <span style="color:cornflowerblue"> Blue </span> : the header for the category <br/>
                <br/>
            </p>
        </div>
    </div>

    <!-- Footer which is fixed to the bottom of the screen -->
    <div class="footer fixed-bottom">TyreTown 2019, Group 5</div>
</div>

<br/>

<script src="scripts/NodeList.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous">
</script>
<script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
    integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
    crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous">
</script>

</body>
</html>
