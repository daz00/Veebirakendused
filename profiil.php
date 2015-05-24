 <?php
include "databaseconnect.php"; 
if(!isset($_SESSION['username'])){
	$_SESSION['viimaneleht'] = 'profiil.php';
	header("Location:login.php");
}
include "header.php";
?>
                 
                      <!-- Content -->
                     
                      <div id="login">
                       
                       <h2>Tere tulemast, <?php

					echo $_SESSION["username"];
					lae_profiil($_SESSION["username"]);
					attacks($_SESSION["username"]);

					?> !</h2> 
                    <h3><strong> Sinu hetkeseis: </strong> </h3>
                    <h3>Käesolev raha:  <?php

					echo $_SESSION["money"];

					?></h3>
                    
                    <h3>Kulutatud:  <?php

					echo $_SESSION["fame"];

					?></h3>
                    
                    <h3>Kasutaja loodud:  <?php

					echo $_SESSION["time_created"];

					?></h3>

					<h3>Ründeid tehtud:  <?php

					if($_SESSION["attacks"]){echo $_SESSION["attacks"];}
					else{echo "Pole rünnanud";}

					?></h3> 


                              
                          <div class ="ymbris">
                          <div class="login">
                              <h2>Profiili muutmine:</h2>
                              <p> <a title="Kustuta" href="/kustuta.php">Kustuta kasutaja</a> </p>
                             
                              </div>
                          </div>
                      </div>
                      <!-- END Content -->
                       <!-- Sidebar -->

                    <div id="külgriba"></div>

                    <!-- END Sidebar -->
                    <div class="cl"></div>
             <?php
			 include "footer.php";
			 ?>