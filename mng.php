 <?php
include "header.php";
if(!isset($_SESSION['username'])){
	$_SESSION['viimaneleht'] = 'mng.php';
	header("Location:login.php");
}
include "databaseconnect.php";
?>

<script src="js/meng.js" type="text/javascript"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js" type="text/javascript"></script>


					<!-- Content -->
                    <div id = "content">
                  	<div class = "vertikaalne">
                    <?php
                    echo lae_mng($_SESSION["username"]); ?>
                                  <h2>Sinu Impeerium</h2>
                        <div class="vasak">
                        <strong> Käesolev raha: <div id = "raha">  
     <?php echo $_SESSION['money']; ?>      
      </div></strong> </div>
                      <div class = "parem">
                       Kulutatud:  <p id = "kulu"><?php echo $_SESSION["fame"];?> </p>
                       </div>
                    </div>
                 	
                    <h2></h2>
                    <div class = "vertikaalne">
                     <div class ="vasak">
                     <h2>Sinu firma</h2>
  					
                    <p>Töölised: </p><p id= "tööliste_arv"><?php echo $_SESSION["worker"]; ?> </p>
             		</div>
                    
                      <!-- END Content -->
                       <!-- Sidebar -->

                    <div class="parem">
                    <h2>Osta</h2>		<div class = "kastike" onclick="Ajax()"> 
             		<div class="pildid">
                            <img src="css/images/tootaja.png" width="100%" longdesc="css/images/tootaja.png" alt = ""/>  </div>
                     
                     <p> Palka töötaja (100€) </p>
                    </div>
                   
                    
                    </div>
                    </div>
                    </div>
				  <!-- END Sidebar -->
				  <div class="cl"></div>
                  
				             <?php
			 include "footer.php";
			 ?>