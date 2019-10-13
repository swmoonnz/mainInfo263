<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">

    <link rel="stylesheet" href="css/styles.css">
    <link rel="stylesheet" href="css/constants.css">
    <link rel="stylesheet" href="css/frontpagestyle.css">

    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>

    <title>Tyre Town Invoice Search</title>
</head>
<body class="background">

<!-- Navigation -->
<div class="row">
    <ul id="navBar" class="fixed-top">
        <li><a href="index.php">Search</a></li>
        <li><a href="about.php">About us</a></li>
        <li><a href="invoiceResult.php">Result</a></li>
    </ul>
</div>

<div class="container">

    <div class="row justify-content-center">
        <div class="title">
            <img src="imgs/logo.png" alt="Tyre Town Logo">
        </div>
        <br/>
        <!-- Search bar-->
        <form method="post" action="invoiceResult.php">
            <div class="search-box">
                <input type="text" name="input" id="receiptID" class="search-txt" placeholder="Enter Invoice Number"/>
                <button type="submit" name="submitButton" class="search-btn" >
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
</div>


<!-- Footer which is fixed to the bottom of the screen -->
<div class="footer fixed-bottom">TyreTown 2019, Group 5</div>

</body>
</html>