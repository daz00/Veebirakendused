<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>
    <?php
    $dbusername = "u179834919_admin";
    $dbpassword = "123456";
    $dbservername = "mysql.hostinger.ee";
	$dbname = "u179834919_baas";
	//kasutan teie toodud lingilt andmebaasiga ühendamise meetodeid

function registreeri($user, $pass, $email){
global $dbusername;
global $dbpassword;
try {
  $pdo = new PDO('mysql:host=mysql.hostinger.ee;dbname=u179834919_baas', $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $sql = "INSERT INTO Users (username, password, email) VALUES (:username, :password, :email)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
    ':username' => $user,
	':password' => $pass,
	':email' => $email
  ));
 
  # Affected Rows?
  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
try{
 $sql = "INSERT INTO Data (username) VALUES (:username)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
    ':username' => $user
  ));
 
  # Affected Rows?
  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
}

function login($user, $pass){
global $dbusername;
global $dbpassword;
try {
    $conn = new PDO('mysql:host=mysql.hostinger.ee;dbname=u179834919_baas', $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
     
    $stmt = $conn->prepare('SELECT * FROM Users WHERE username = :user AND password = :pass');
    $stmt->execute(array(
	':user' => $user,
	':pass' => $pass ));
 
    $result = $stmt->fetchAll();
 
  if ( count($result) ) { 
  $_SESSION["username"]=$user;
	return true;
    foreach($result as $row) {
      print_r($row);
	  echo $row['username']. '<br />';
    }   
  } else {
    echo "No rows returned.";
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}

function lae_profiil($user){
global $dbusername;
global $dbpassword;
try {
    $conn = new PDO('mysql:host=mysql.hostinger.ee;dbname=u179834919_baas', $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
     
    $stmt = $conn->prepare('SELECT * FROM Users LEFT JOIN Data ON Data.username= Users.username WHERE Users.username = :user AND Data.username= Users.username');
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
}
function attacks($user){
global $dbusername;
global $dbpassword;
try {
    $conn = new PDO('mysql:host=mysql.hostinger.ee;dbname=u179834919_baas', $dbusername, $dbpassword);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);    
     
    $stmt = $conn->prepare('SELECT attacker, COUNT(*) AS attacks FROM Attacks WHERE Attacks.attacker= :user GROUP BY attacker');
    $stmt->execute(array(
	':user' => $user
	));
 
    $result = $stmt->fetchAll();
 
  if ( count($result)==1 ) { 
    foreach($result as $row) {
	  $_SESSION["attacks"]=$row['attacks'];
    }   
  } else {
	$_SESSION["attacks"]=null;
  }
} catch(PDOException $e) {
    echo 'ERROR: ' . $e->getMessage();
}
}
?>
</body>
</html>