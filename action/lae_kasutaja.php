
<?php
    $dbusername = "u179834919_admin";
    $dbpassword = "123456";
    $dbservername = "mysql.hostinger.ee";
	$dbname = "u179834919_baas";

// Create connection
$conn = new mysqli($dbservername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Ühendus ebaõnnestus: " . $conn->connect_error);
} 

function lae_profiil($user){
global $dbusername;
global $dbpassword;
try {
    $conn = new PDO('mysql:host=mysql.hostinger.ee;dbname=u179834919_baas', $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
     
    $stmt = $conn->prepare('SELECT username, fame FROM Users LEFT JOIN Data ON Data.username= Users.username WHERE Users.username = :user AND Data.username= Users.username');
    $stmt->execute(array(
	':user' => $user
	));
 
    $result = $stmt->fetchAll();
 
  if ( count($result)==1 ) { 
    foreach($result as $row) {
	  $_SESSION["money"]=$row['money'];
	  $_SESSION["fame"]=$row['fame'];
	  $_SESSION["time_created"]=$row['time_created'];
    }   
  } else {
    echo "No rows returned.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
$conn->close();
}
?>