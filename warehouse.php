<?php
session_start();
require_once 'config/config.php';
require_once BASE_PATH . '/includes/auth_validate.php';

$db = getDbInstance();



include BASE_PATH . '/includes/header.php';
?>
<!-- Main container -->
<div id="page-wrapper">
</div>
<!-- //Main container -->
<?php include BASE_PATH . '/includes/footer.php';?>
