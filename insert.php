<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
<?php
Include('databaseconnect.php');
registreeri($_POST[kasutaja_nimi],$_POST[parool_1],$_POST[email_1]);
header("Location: /login.html")
?>
</body>
</html>
