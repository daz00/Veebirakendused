<html manifest="cache.appcache">
<?php
session_start();
session_destroy();
header("Location:login.php");
exit();
?>