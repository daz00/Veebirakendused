<?php include "databaseconnect.php";
	  include "action/lae_mng.php";

global $dbusername;
global $dbpassword;
try {
  $kasutaja = ($_SESSION["username"]);
  $pdo = new PDO('mysql:host=mysql.hostinger.ee;dbname=u179834919_baas', $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $sql = "UPDATE Data SET money = ROUND((money + (25*worker)/60),2) WHERE :username = Data.username";


  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
    ':username' => $kasutaja,
  ));
 
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
lae_mng($_SESSION['username']);
echo $_SESSION['money'];
?>