 <?php
include "databaseconnect.php"; 
if(!isset($_SESSION['username'])){
	$_SESSION['viimaneleht'] = 'kirjad.php';
	header("Location:login.php");
}
include "header.php";
?>
					<!-- Content -->				  <!-- END Content -->
					<!-- Sidebar -->
				  <!-- END Sidebar -->
				  <div class="cl"></div>
             <?php
			 include "footer.php";
			 ?>