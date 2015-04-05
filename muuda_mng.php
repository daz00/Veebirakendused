<?php
session_start();
    $dbusername = "u179834919_admin";
    $dbpassword = "123456";
    $dbservername = "mysql.hostinger.ee";
	$dbname = "u179834919_baas";

// Create connection
try {
  $kasutaja = ($_SESSION["username"]);
  $pdo = new PDO('mysql:host=mysql.hostinger.ee;dbname=u179834919_baas', $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE Data SET worker = worker + 1, money = money-100, fame = fame + 100 WHERE :username = Data.username";


  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
    ':username' => $kasutaja
  ));
 
  # Affected Rows?
  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


?>

