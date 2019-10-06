<!-- This is your main page -->
<!--<!DOCTYPE html>-->
<!--<html lang="en">-->
<head>
    <meta charset="utf-8">
    <!--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">-->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Tyre Town</title>

    Bootstrap core CSS
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-grid.min.css">
    <link rel="stylesheet" href="css/bootstrap-reboot.min.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/interactiveStyle.css">

    <!-- error handling function -->
    <script src="scripts/errorHandler.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>

<!-- Navigation -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container col-lg-11">
        <a class="navbar-brand" href="invoiceResult.php">Tyre Town1</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
    </div>
    <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav Tyre-Town">
            <li class="nav-item">
                <a class="nav-link col-lg-1" href="invoiceResult.php"><i class="fa fa-bars fa-3x"></i></a>
            </li>
        </ul>
    </div>


</nav>

<div class="container">

    <div class="col-lg-12 ">
        <h2 class="mt-5 text-center">Tyre Town Invoice Search3</h2>
    </div>

    <!--    BELOW IS SEARCH BOX-->
    <form method="post" action="invoiceResult.php">
        <div class="search-box float-mid">
            <input type="text" class="search-txt" name="input" size="25" id="receiptID"
                   placeholder="Enter Invoice Number">
            <button type="submit" name="submitButton" value="test2" class="search-btn"><i class="fas fa-search"></i>
            </button>
        </div>
    </form>

    <br/>

    <div>
        <button class="customerButton btn btn-warning col-3" id="customer">Customer</button>
    </div>
    <div class="results" id="customerInfo">
        <?php require_once('./request/search_request2.php');
        require_once('./php/fetchCustomerInfo.php');
        fetchCustomerInfo($query); ?>
    </div>
    <br/>

    <div class="row">
        <button class="vehicleButton btn btn-primary col-3 test" id="vehicle">Vehicle</button>
        <button class="invoiceButton btn btn-success col-3 test" id="invoice">Invoice</button>
        <button class="garageButton btn btn-info col-3 test" id="garage">Garage</button>
        <button class="alignmentButton btn btn-danger col-3 test" id="alignment">Alignment</button>
    </div>
    <br/>

    <div class="row">
        <div id="updatablePanel" class="col-lg-12">
            <div class="results" id="vehicleInfo" style="display:none;">
                <?php require_once('./request/vehicle_request.php');
                require_once('./php/fetchVehicleInfo.php');
                fetchVehicleInfo($query);?>
            </div>

            <div class="results" id="invoiceInfo" style="display:none;">
                <?php require_once('./request/search_request.php');
                require_once('./php/fetchInvoiceInfo.php');
                fetchInvoiceInfo($query);?>
            </div>

            <div class="results" id="garageInfo" style="display:none;">
                <?php require_once('./request/search_request3.php');
                require_once('./php/fetchGarageInfo.php');
                fetchGarageInfo($query);?>
            </div>

            <div class="results" id="alignmentInfo" style="display:none;">
                <?php require_once('./request/search_request4.php');
                require_once('./php/fetchAlignment.php');
                fetchAlignmentInfo($query);?>
            </div>
        </div>
    </div>

    <br/>

    <br/>

    <br/>

</div>
    <br/>

    <?php
//    require_once('./request/search_request2.php');
//    require_once('./php/fetchCustomerInfo.php');
//    require_once('./request/search_request.php');
//    require_once('./php/fetchInvoiceInfo.php');
//    fetchInvoiceInfo($query);
//    require_once('./request/search_request3.php');
//    require_once('./php/fetchGarageInfo.php');
//    require_once('./request/search_request4.php');
//    require_once('./php/fetchAlignment.php');
    ?>


    <br/>
    <br/>

    <div id="footer" class="footer fixed-bottom">TyreTown 2018, Dev Group D</div>

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
