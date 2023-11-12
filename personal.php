<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

$db = getDbInstance();



include BASE_PATH . '/includes/header.php';
?>
<!-- Main container -->
<div id="page-wrapper">
<div class="container">
  <h2>Personal</h2>
  <form action="">
  <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>

    <div class="form-group">
      <label for="">   </label>
      <input type="" class="form-control" id="" placeholder="" name="">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</div>
<!-- //Main container -->
<?php include BASE_PATH . '/includes/footer.php';?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Personal Form</title>
</head>
<body>

<div class="container">
  <h2>Personal Form</h2>
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

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
