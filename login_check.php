<?php
session_start();
Include('databaseconnect.php');
if(login($_POST[kasutaja_nimi],$_POST[parool])){
	if(isset($_SESSION['viimaneleht'])){
	header("Location:". $_SESSION['viimaneleht']);
	} else{header("Location:profiil.php");}
}
	else{
	header("Location:login.php");
}
exit();
?>