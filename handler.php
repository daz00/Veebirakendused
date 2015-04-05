<script> console.log("handler");</script>
<?php
session_start();
include 'databaseconnect.php';

    // Decode our JSON into PHP objects we can use
    $data = json_decode($_POST["data"]);
	$_SESSION['username']=$_POST["data"];
    registreeri($_POST["data"], "", "a");


?>

