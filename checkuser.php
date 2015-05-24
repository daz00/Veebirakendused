<?php
include "databaseconnect.php";
if(!check_user($_POST["value"][0])){
  exit('success');
}else{
  exit('error');
}

?>