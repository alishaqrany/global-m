<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

$db = getDbInstance();



include BASE_PATH . '/includes/header.php';
?>
<!-- Main container -->
<div id="page-wrapper">
<div class="container" style="width:100%">
  <h2>warhouse Form</h2>
  <form action="">

  <div class="row flex-row">

<div class="col-lg-4 col-md-6 col-sm-12">



    <div class="form-group">
      <label for="bookingNo">Booking No</label>
      <input type="text" class="form-control" id="bookingNo" placeholder="Enter booking number">
    </div>
    <div class="form-group">
      <label for="date">Date</label>
      <input type text" class="form-control" id="date" placeholder="Enter date">
    </div>
    <div class="form-group">
      <label for="forwarding">Forwarding</label>
      <input type="text" class="form-control" id="forwarding" placeholder="Enter forwarding information">
    </div>
    <div class="form-group">
      <label for="shoring">Shoring</label>
      <input type="text" class="form-control" id="shoring" placeholder="Enter shoring information">
    </div>
    <div class="form-group">
      <label for="shoringDate">Shoring Date</label>
      <input type="text" class="form-control" id="shoringDate" placeholder="Enter shoring date">
    </div>
    <div class="form-group">
      <label for="hbLNo">HB/L NO</label>
      <input type="text" class="form-control" id="hbLNo" placeholder="Enter HB/L number">
    </div>

    <div class="form-group">
      <label for="mbLNo">MB/L NO</label>
      <input type="text" class="form-control" id="mbLNo" placeholder="Enter MB/L number">
    </div>
    <div class="form-group">
      <label for="shipper">SHIPPER</label>
      <input type="text" class="form-control" id="shipper" placeholder="Enter shipper information">
    </div>
    <div class="form-group">
      <label for="code">Code</label>
      <input type="text" class="form-control" id="code" placeholder="Enter code">
    </div>

    <div class="form-group">
      <label for="consignee">CONSIGNEE</label>
      <input type="text" class="form-control" id="consignee" placeholder="Enter consignee information">
    </div>
    <div class="form-group">
      <label for="taxID">TAX ID</label>
      <input type="text" class="form-control" id="taxID" placeholder="Enter tax ID">
    </div>


    </div>





<div class="col-lg-4 col-md-6 col-sm-12">



    <div class="form-group">
      <label for="tel">Tel</label>
      <input type="text" class="form-control" id="tel" placeholder="Enter telephone number">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email address">
    </div>

    <div class="form-group">
      <label for="buildingName">BUILDING NAME</label>
      <input type="text" class="form-control" id="buildingName" placeholder="Enter building name">
    </div>
    <div class="form-group">
      <label for="street">street</label>
      <input type="text" class="form-control" id="street" placeholder="Enter street address">
    </div>
    <div class="form-group">
      <label for="country">Country</label>
      <input type="text" class="form-control" id="country" placeholder="Enter country">
    </div>
    <div class="form-group">
      <label for="zipCode">Zip Code</label>
      <input type="text" class="form-control" id="zipCode" placeholder="Enter zip code">
    </div>
    <div class="form-group">
      <label for="notify">NOTIFY</label>
      <input type="text" class="form-control" id="notify" placeholder="Enter notify information">
    </div>

    <div class="form-group">
      <label for="tel">Tel</label>
      <input type="text" class="form-control" id="tel" placeholder="Enter telephone number">
    </div>
    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email address">
    </div>

    <div class="form-group">
      <label for="description">DESCRIPTION</label>
      <textarea class="form-control" id="description" rows="4" placeholder="Enter description"></textarea>
    </div>

    <div class="form-group">
      <label for="hs">Hs Code</label>
      <input type="text" class="form-control" id="hs" placeholder="Enter HS Code ">
    </div>
    <div class="form-group">
      <label for="Weight">Weight</label>
      <input type="email" class="form-control" id="Weight" placeholder="Enter Weight address">
    </div>


    
</div>





<div class="col-lg-4 col-md-6 col-sm-12">



    <div class="form-group">
      <label for="remark">remark</label>
      <input type="email" class="form-control" id="remark" placeholder="Enter remark address">
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
