<?php
include "header.php";

?>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
<script type="text/javascript"     src="js/edetabel.js"></script>
<script type="text/javascript">
window.onload = "checkhash()";
</script>
 	<!-- Content -->	
     <div id="login">
     <div class="ymbris">
     <p> <strong> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id molestie enim. Suspendisse consequat urna non ante gravida euismod. In in nibh vestibulum at tellus viverra nulla. </strong></p></div>
 	<div class = "ymbris">
     <div id="tabel_2">
     <?php include "action/lae_esimene.php"; ?>
     </div></div>
     
    <a title="Esimene lehekülg" class="edasi" onclick="lae_leht(1)">1</a> <a title="Teine lehekülg" class="edasi" onclick="lae_leht(2)">2</a> <a title="Kolmas lehekülg" class="edasi" onclick="lae_leht(3)">3</a>
     
    
     </div>
    			  <!-- END Content -->
	<!-- Sidebar -->
     <div id="külgriba"></div>
	<!-- END Sidebar -->
	<div class="cl"></div>
<?php
include "footer.php";
?>