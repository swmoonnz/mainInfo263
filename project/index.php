<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/frontpagestyle.css">
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
    <title>Awesome Search Box</title>
</head>
<body class="background">
<div class="title">
    <h1>Tyre Town</h1>
</div>

<!-- Navigation -->
<ul id="navBar">
    <li><a href="index.php">Search</a></li>
    <li><a href="about.php">About us</a></li>
    <li><a href="invoiceResult.php">Result</a></li>
</ul>


<form method="post" action="invoiceResult.php">
    <div class="search-box">
        <input type="text" name="input" id="receiptID" class="search-txt" placeholder="Enter Invoice Number"/>
        <button type="submit" name="submitButton" class="search-btn" >
            <i class="fas fa-search"></i>
        </button>
    </div>
</form>
</body>
</html>