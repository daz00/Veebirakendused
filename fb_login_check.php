<?php
session_start();
Include('databaseconnect.php');
if(login_FB($_POST[email])){
	if(isset($_SESSION['viimaneleht'])){
	header("Location:". $_SESSION['viimaneleht']);
	} else{header("Location:profiil.php");}
}
	else{
	header("Location:login.php");
}
exit();
?>