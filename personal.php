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
  <h2>warhouse Form</h2>
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
