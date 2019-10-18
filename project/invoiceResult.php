<!--Invoice result page-->
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tyre Town Result</title>

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/tableStyle.css">
    <link rel="stylesheet" href="css/invoiceResultStyle.css">
    <link rel="stylesheet" href="css/constants.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">

    <!-- error handling function -->
    <script src="scripts/errorHandler.js"></script>
    <script defer src="https://kit.fontawesome.com/df286d8985.js" crossorigin="anonymous"></script>
    <!-- PHP files that are used to fetch Invoice -->
    <?php
        require_once('./php/fetchCustomerInfo.php');
        require_once('./php/fetchVehicleInfo.php');
        require_once('./php/fetchInvoiceInfo.php');
        require_once('./php/fetchGarageInfo.php');
        require_once('./php/fetchAlignment.php');
        ?>
</head>

<body class="backgroundImg" title="Tyres background">
<!-- Navigation -->
<ul id="navBar" class="fixed-top">
    <li><a href="tyreTownHomePage.php" >Search</a></li>
    <li><a href="invoiceResult.php">Result</a></li>
    <li><a href="about.php">About</a></li>
</ul>
<!-- Main Container -->
<div class="container">
    <div class="col-lg-12 ">
        <h2 class="mt-5 text-center header">Tyre Town Invoice Search</h2>
    </div>
    <!--        BELOW IS SEARCH BOX-->
    <div class="row justify-content-center">
        <form method="post" action="invoiceResult.php" autocomplete="off">
            <div class="float-mid search-box">
                <input type="text" class="search-txt" name="input" id="receiptID"
                       maxlength="7" placeholder="Enter Invoice Number">
                <button type="submit" name="submitButton" value="test2" class="search-btn"><i class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>

    <br/>

    <div class="text-center">
        <button class="customerButton btn btn-warning col-10 col-md-3" id="customer">
            <i class="fa fa-user"></i>
            Customer</button>
    </div>
    <div class="results" id="customerInfo">
        <?php require_once('./request/search_request2.php');
        fetchCustomerInfo($query); ?>
    </div>

    <br/>

    <div class="row justify-content-center">
        <button class="vehicleButton btn btn-primary col-10 col-sm-3 botbuts" id="vehicle">
            <i class="fas fa-car-side"></i> Vehicle</button>
        <button class="invoiceButton btn btn-success col-10 col-sm-3 botbuts" id="invoice">
            <i class="fas fa-file-invoice-dollar"></i> Invoice</button>
        <button class="garageButton btn btn-info col-10 col-sm-3 botbuts" id="garage">
            <i class="fa fa-warehouse"></i> Garage</button>
        <button class="alignmentButton btn btn-danger col-10 col-sm-3 botbuts" id="alignment">
            <i class="fas fa-tools"></i> Alignment</button>
    </div>

    <br/>

    <div class="row">
        <div id="updatablePanel" class="col-lg-12">
            <div class="results " id="vehicleInfo" style="display:none;">
                <?php require_once('./request/vehicle_request.php');
                fetchVehicleInfo($query);?>
            </div>

            <div class="results " id="invoiceInfo" style="display:none;">
                <?php require_once('./request/search_request.php');
                fetchInvoiceInfo($query);?>
            </div>

            <div class="results " id="garageInfo" style="display:none;">
                <?php require_once('./request/search_request3.php');
                fetchGarageInfo($query);?>
            </div>

            <div class="results " id="alignmentInfo" style="display:none;">
                <?php require_once('./request/search_request4.php');
                fetchAlignmentInfo($query);?>
            </div>
        </div>
    </div>

    <br/>
    <!-- Footer which is fixed to the bottom of the screen -->
    <div class="footer fixed-bottom">TyreTown 2019, Group 5</div>
</div>
<!-- Useful scripts for the page    -->
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
    <script src="scripts/scripts.js"></script>
</body>
