<?php
include "databaseconnect.php";
session_start();
kustuta_kasutaja($_SESSION["username"]);
session_destroy();
header("Location:login.php");
exit();
?>