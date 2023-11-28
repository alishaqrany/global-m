
<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

$db = getDbInstance();



include BASE_PATH . '/includes/header.php';
?>

<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cargo Export Form</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body> -->
<!-- Main container -->
<div id="page-wrapper">
<div class="container" style="width:100%">
<h2>Cargo Export </h2>
    <form action="cargo-export.php" method="post">

    <div class="row flex-row">

        <div class="col-lg-4 col-md-6 col-sm-12">


        <!-- Booking Information Section -->
        <div class="form-group">
            <label for="bookingNo">Booking No:</label>
            <input type="text" class="form-control" id="bookingNo" name="bookingNo" required>
        </div>

        <!-- Date Section -->
        <div class="form-group">
            <label for="date">Date:</label>
            <input type="date" class="form-control" id="date" name="date" required>
        </div>

        <!-- Egypt Contact Section -->
        <div class="form-group">
            <label for="egyptContact">Egypt Contact:</label>
            <input type="text" class="form-control" id="egyptContact" name="egyptContact" required>
        </div>

        <!-- Forwarding Section -->
        <div class="form-group">
            <label for="forwarding">Forwarding:</label>
            <input type="text" class="form-control" id="forwarding" name="forwarding" required>
        </div>

        <!-- Shoring Section -->
        <div class="form-group">
            <label for="shoring">Shoring:</label>
            <input type="text" class="form-control" id="shoring" name="shoring" required>
        </div>

        <!-- ... Add the rest of your form fields similarly -->

        <div class="form-group">
            <label for="loadingDtd">Loading DTD:</label>
            <input type="date" class="form-control" id="loadingDtd" name="loadingDtd" required>
        </div>

        <div class="form-group">
            <label for="arrDtd">ARR DTD:</label>
            <input type="date" class="form-control" id="arrDtd" name="arrDtd" required>
        </div>

<!-- ... Add the remaining fields -->

<!-- B/L Numbers Section -->
<div class="form-group">
    <label for="hblNo">H B/L No:</label>
    <input type="text" class="form-control" id="hblNo" name="hblNo" required>
</div>

<div class="form-group">
    <label for="mblNo">M B/L No:</label>
    <input type="text" class="form-control" id="mblNo" name="mblNo" required>
</div>

<!-- Shipper Information Section -->
<div class="form-group">
    <label for="shipperCode">Shipper Code:</label>
    <input type="text" class="form-control" id="shipperCode" name="shipperCode" required>
</div>

<div class="form-group">
    <label for="consignee">Consignee:</label>
    <input type="text" class="form-control" id="consignee" name="consignee" required>
</div>

<div class="form-group">
    <label for="idNo">Id No:</label>
    <input type="text" class="form-control" id="idNo" name="idNo" required>
</div>

<div class="form-group">
    <label for="tel">Tel:</label>
    <input type="tel" class="form-control" id="tel" name="tel" required>
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" id="email" name="email" required>
</div>

<!-- Address Section -->
<div class="form-group">
    <label for="buildingName">Building Name:</label>
    <input type="text" class="form-control" id="buildingName" name="buildingName" required>
</div>


</div>




<div class="col-lg-4 col-md-6 col-sm-12">



<div class="form-group">
    <label for="street">Street:</label>
    <input type="text" class="form-control" id="street" name="street" required>
</div>

<div class="form-group">
    <label for="country">Country:</label>
    <input type="text" class="form-control" id="country" name="country" required>
</div>

<div class="form-group">
    <label for="zipCode">Zip Code:</label>
    <input type="text" class="form-control" id="zipCode" name="zipCode" required>
</div>

<!-- Notify Section -->
<div class="form-group">
    <label for="notify">Notify:</label>
    <input type="text" class="form-control" id="notify" name="notify" required>
</div>

<!-- Goods Information Section -->
<div class="form-group">
    <label for="goodsDescription">Description of Goods:</label>
    <textarea class="form-control" id="goodsDescription" name="goodsDescription" rows="3" required></textarea>
</div>

<div class="form-group">
    <label for="hsCode">Hs Code:</label>
    <input type="text" class="form-control" id="hsCode" name="hsCode" required>
</div>

<div class="form-group">
    <label for="quantity">Quantity:</label>
    <input type="number" class="form-control" id="quantity" name="quantity" required>
</div>

<div class="form-group">
    <label for="pck">PCK:</label>
    <input type="text" class="form-control" id="pck" name="pck" required>
</div>

<!-- ... Continue adding the rest of the fields -->

<!-- Additional Information Section -->
<div class="form-group">
    <label for="acidNo">Acid No:</label>
    <input type="text" class="form-control" id="acidNo" name="acidNo" required>
</div>

<div class="form-group">
    <label for="importTax">Import Tax:</label>
    <input type="text" class="form-control" id="importTax" name="importTax" required>
</div>

<div class="form-group">
    <label for="foreignExpCountry">Foreign Exp Country:</label>
    <input type="text" class="form-control" id="foreignExpCountry" name="foreignExpCountry" required>
</div>

<div class="form-group">
    <label for="mV">M/V:</label>
    <input type="text" class="form-control" id="mV" name="mV" required>
</div>

<div class="form-group">
    <label for="pL">P/L:</label>
    <input type="text" class="form-control" id="pL" name="pL" required>
</div>

<div class="form-group">
    <label for="containerNo2">Container No:</label>
    <input type="text" class="form-control" id="containerNo2" name="containerNo2" required>
</div>

<div class="form-group">
    <label for="weight">Weight:</label>
    <input type="text" class="form-control" id="weight" name="weight" required>
</div>


</div>





<div class="col-lg-4 col-md-6 col-sm-12">


<div class="form-group">
    <label for="measurement">Measurement:</label>
    <input type="text" class="form-control" id="measurement" name="measurement" required>
</div>

<div class="form-group">
    <label for="seal">Seal:</label>
    <input type="text" class="form-control" id="seal" name="seal" required>
</div>

<div class="form-group">
    <label for="freight">Freight:</label>
    <input type="text" class="form-control" id="freight" name="freight" required>
</div>

<div class="form-group">
    <label for="debit">Debit:</label>
    <input type="text" class="form-control" id="debit" name="debit" required>
</div>

<!-- Invoice Information Section -->
<div class="form-group">
    <label for="invoiceUSD">Invoice (USD):</label>
    <input type="text" class="form-control" id="invoiceUSD" name="invoiceUSD" required>
</div>

<div class="form-group">
    <label for="invoiceEGP">Invoice (EGP):</label>
    <input type="text" class="form-control" id="invoiceEGP" name="invoiceEGP" required>
</div>

<div class="form-group">
    <label for="paymentDtd">Payment DTD:</label>
    <input type="date" class="form-control" id="paymentDtd" name="paymentDtd" required>
</div>

<!-- Payment Information Section -->
<div class="form-group">
    <label for="cash">Cash:</label>
    <input type="text" class="form-control" id="cash" name="cash" required>
</div>

<div class="form-group">
    <label for="bank">Bank:</label>
    <input type="text" class="form-control" id="bank" name="bank" required>
</div>

<div class="form-group">
    <label for="otherExpensesUSD">Other Expenses (USD):</label>
    <input type="text" class="form-control" id="otherExpensesUSD" name="otherExpensesUSD" required>
</div>

<div class="form-group">
    <label for="otherExpensesEGP">Other Expenses (EGP):</label>
    <input type="text" class="form-control" id="otherExpensesEGP" name="otherExpensesEGP" required>
</div>

<!-- Classification Section -->
<div class="form-group">
    <label for="classified">Classified:</label>
    <input type="text" class="form-control" id="classified" name="classified" required>
</div>

<!-- Remark and Revision Section -->
<div class="form-group">
    <label for="remark">Remark:</label>
    <textarea class="form-control" id="remark" name="remark" rows="3" required></textarea>
</div>

<div class="form-group">
    <label for="revision">Revision:</label>
    <input type="text" class="form-control" id="revision" name="revision" required>
</div>

<div class="form-group">
    <label for="revisionDtd">Revision DTD:</label>
    <input type="date" class="form-control" id="revisionDtd" name="revisionDtd" required>
</div>


</div>


</div>


<br>

<center><button type="submit" class="btn btn-primary align-center">Submit</button></center>
<br>

</form>
</div>
</div>

<!-- //Main container -->
<?php include BASE_PATH . '/includes/footer.php';?>

<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->
