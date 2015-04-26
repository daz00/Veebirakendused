<?php
session_start(); 
include 'databaseconnect.php';
    header('Content-Type: application/json');

    $aResult = array();

    if( !isset($_POST['functionname']) ) { $aResult['error'] = 'No function name!'; }

    if( !isset($_POST['arguments']) ) { $aResult['error'] = 'No function arguments!'; }

    if( !isset($aResult['error']) ) {

        switch($_POST['functionname']) {
            case 'add':
               if( !is_array($_POST['arguments']) || (count($_POST['arguments']) < 2) ) {
                   $aResult['error'] = 'Error in arguments!';
               }
               else {
             
                  $_SESSION['username']=$_POST['arguments'][1];
                  registreeri_FB($_POST['arguments'][0],$_POST['arguments'][1],$_POST['arguments'][2]);
                  
if(login_FB($_POST['arguments'][2])){
	if(isset($_SESSION['viimaneleht'])){
    
    
	header("Location:". $_SESSION['viimaneleht']);
	} else{
    
                
    header("Location:profiil.php");}
}
	else{
header("Location:login.php");
}
exit();


               }
               break;

            default:
               $aResult['error'] = 'Not found function '.$_POST['functionname'].'!';
               break;
        }

    }

    echo json_encode($aResult);

?>