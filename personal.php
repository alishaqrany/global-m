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
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Personal Form</title>
</head>
<body> -->

<!-- Main container -->
<div id="page-wrapper">



<div class="container">
  <h2>Personal </h2>
  <form action="personal.php" method="post">
    <!-- Personal Fields -->
    <div class="form-group">
      <label for="bookingNo">Booking No</label>
      <input type="text" class="form-control" id="bookingNo" name="bookingNo" required>
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input type="text" class="form-control" id="date" name="date" required>
    </div>
    <div class="form-group">
      <label for="yardDate">Yard Date</label>
      <input type="text" class="form-control" id="yardDate" name="yardDate" required>
    </div>
    <div class="form-group">
      <label for="egyptContact">Egypt Contact</label>
      <input type="text" class="form-control" id="egyptContact" name="egyptContact" required>
    </div>
    <div class="form-group">
      <label for="forwarding">Forwarding</label>
      <input type="text" class="form-control" id="forwarding" name="forwarding" required>
    </div>
    <div class="form-group">
      <label for="shoring">Shoring</label>
      <input type="text" class="form-control" id="shoring" name="shoring" required>
    </div>
    <div class="form-group">
      <label for="shoringDTD">Shoring DTD</label>
      <input type="text" class="form-control" id="shoringDTD" name="shoringDTD" required>
    </div>
<!-- Continue with the rest of the personal fields -->
<div class="form-group">
  <label for="hblNo">H B/L No</label>
  <input type="text" class="form-control" id="hblNo" name="hblNo" required>
</div>
<div class="form-group">
  <label for="mblNo">M B/L No</label>
  <input type="text" class="form-control" id="mblNo" name="mblNo" required>
</div>
<div class="form-group">
  <label for="shipper">Shipper</label>
  <input type="text" class="form-control" id="shipper" name="shipper" required>
</div>
<div class="form-group">
  <label for="code">Code</label>
  <input type="text" class="form-control" id="code" name="code" required>
</div>
<div class="form-group">
  <label for="exporterName">Exporter Name</label>
  <input type="text" class="form-control" id="exporterName" name="exporterName" required>
</div>
<div class="form-group">
  <label for="consignee">Consignee</label>
  <input type="text" class="form-control" id="consignee" name="consignee" required>
</div>
<div class="form-group">
  <label for="idNo">Id No</label>
  <input type="text" class="form-control" id="idNo" name="idNo" required>
</div>
<div class="form-group">
  <label for="tel">Tel</label>
  <input type="text" class="form-control" id="tel" name="tel" required>
</div>
<div class="form-group">
  <label for="email">Email</label>
  <input type="text" class="form-control" id="email" name="email" required>
</div>
<div class="form-group">
  <label for="buildingName">Building Name</label>
  <input type="text" class="form-control" id="buildingName" name="buildingName" required>
</div>
<div class="form-group">
  <label for="street">Street</label>
  <input type="text" class="form-control" id="street" name="street" required>
</div>
<div class="form-group">
  <label for="country">Country</label>
  <input type="text" class="form-control" id="country" name="country" required>
</div>
<div class="form-group">
  <label for="zipCode">Zip Code</label>
  <input type="text" class="form-control" id="zipCode" name="zipCode" required>
</div>
<div class="form-group">
  <label for="notify">Notify</label>
  <input type="text" class="form-control" id="notify" name="notify" required>
</div>
<div class="form-group">
  <label for="description">Description of goods</label>
  <input type="text" class="form-control" id="description" name="description" required>
</div>
<div class="form-group">
  <label for="hsCode">Hs code</label>
  <input type="text" class="form-control" id="hsCode" name="hsCode" required>
</div>
<div class="form-group">
  <label for="chassisNo">Chassis No</label>
  <input type="text" class="form-control" id="chassisNo" name="chassisNo" required>
</div>
<div class="form-group">
  <label for="quantity">Quantity</label>
  <input type="text" class="form-control" id="quantity" name="quantity" required>
</div>
<div class="form-group">
  <label for="pck">PCK</label>
  <input type="text" class="form-control" id="pck" name="pck" required>
</div>
<div class="form-group">
  <label for="model">Model</label>
  <input type="text" class="form-control" id="model" name="model" required>
</div>
<div class="form-group">
  <label for="year">Year</label>
  <input type="text" class="form-control" id="year" name="year" required>
</div>
<div class="form-group">
  <label for="acidNo">Acid No</label>
  <input type="text" class="form-control" id="acidNo" name="acidNo" required>
</div>
<div class="form-group">
  <label for="importTax">Import tax</label>
  <input type="text" class="form-control" id="importTax" name="importTax" required>
</div>
<div class="form-group">
  <label for="forwarderId">F. forwarder id</label>
  <input type="text" class="form-control" id="forwarderId" name="forwarderId" required>
</div>
<div class="form-group">
  <label for="foreignExpCountry">Foreign exp country</label>
  <input type="text" class="form-control" id="foreignExpCountry" name="foreignExpCountry" required>
</div>
<div class="form-group">
  <label for="mV">M/ V</label>
  <input type="text" class="form-control" id="mV" name="mV" required>
</div>
<div class="form-group">
  <label for="pL">P/ L</label>
  <input type="text" class="form-control" id="pL" name="pL" required>
</div>
<div class="form-group">
  <label for="loadingDTD">Loading DTD</label>
  <input type="text" class="form-control" id="loadingDTD" name="loadingDTD" required>
</div>
<div class="form-group">
  <label for="fD">F/ D</label>
  <input type="text" class="form-control" id="fD" name="fD" required>
</div>
<div class="form-group">
  <label for="arrDTD">ARR DTD</label>
  <input type="text" class="form-control" id="arrDTD" name="arrDTD" required>
</div>
<div class="form-group">
  <label for="containerNo2">Container No</label>
  <input type="text" class="form-control" id="containerNo2" name="containerNo2" required>
</div>
<div class="form-group">
  <label for="freight">Freight</label>
  <input type="text" class="form-control" id="freight" name="freight" required>
</div>
<div class="form-group">
  <label for="debit">Debit</label>
  <input type="text" class="form-control" id="debit" name="debit" required>
</div>
<div class="form-group">
  <label for="invoice">Invoice (USD and EGP)</label>
  <input type="text" class="form-control" id="invoice" name="invoice" required>
</div>
<div class="form-group">
  <label for="paymentDTD">Payment DTD</label>
  <input type="text" class="form-control" id="paymentDTD" name="paymentDTD" required>
</div>
<div class="form-group">
  <label for="cash">Cash</label>
  <input type="text" class="form-control" id="cash" name="cash" required>
</div>
<div class="form-group">
  <label for="bank">Bank</label>
  <input type="text" class="form-control" id="bank" name="bank" required>
</div>
<div class="form-group">
  <label for="otherExpenses">Other expenses (USD and EGP)</label>
  <input type="text" class="form-control" id="otherExpenses" name="otherExpenses" required>
</div>
<div class="form-group">
  <label for="classified">Classified</label>
  <input type="text" class="form-control" id="classified" name="classified" required>
</div>
<div class="form-group">
  <label for="remark">Remark</label>
  <input type="text" class="form-control" id="remark" name="remark" required>
</div>
<div class="form-group">
  <label for="revision">Revision</label>
  <input type="text" class="form-control" id="revision" name="revision" required>
</div>
<div class="form-group">
  <label for="revisionDTD">Revision DTD</label>
  <input type="text" class="form-control" id="revisionDTD" name="revisionDTD" required>
</div>
<!-- End of personal fields -->

<button type="submit" class="btn btn-primary">Submit</button>
</form>
</div>


</div>
<!-- //Main container -->
<?php include BASE_PATH . '/includes/footer.php';?>
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html> -->





