<?php
session_start();
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title></title>
</head>
<body>
<?php
Include('databaseconnect.php');
if(login($_POST[kasutaja_nimi],$_POST[parool])){
header("Location: /profiil.php");
exit;}
else{header("Location: /login.html");
exit;}
?>
</body>
</html>