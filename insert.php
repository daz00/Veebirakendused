<?php
Include('databaseconnect.php');
registreeri($_POST[kasutaja_nimi],$_POST[parool_1],$_POST[email_1]);
header("Location: /login.php")
?>
