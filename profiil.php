 <?php
session_start();
include "databaseconnect.php"; 
if((!isset($_SESSION['username'])))
{
	header('Location: http://koodiimpeerium.esy.es/login.html');
}
?>



 
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <title>CE: Code Empire</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
      <link rel="icon" type="image/png" href="css/images/ce.ico"/>
  
  </head>
  <body>
      <!-- Wrapper -->
      <div id="wrapper">
          <!-- Shell -->
          <div class="shell">
              <div class="cl"></div>
              <!-- Header -->
              <div id="header">
                  <!-- Logo -->
                  <div id="logo">
                      <h1><a href="#" title="Avaleht">Code Empire</a></h1>
                  </div>
                  <!-- END Logo -->
  
                  <div class="cl"></div>
              </div>
              <!-- END Header -->
              
              <!-- Slider -->
          <div class ="header">
            <img src="css/images/pilt.png" alt="Mingi decent pilt tuleb siia" width="100%" /></div>
                      
                          <!-- Menüü (Lisada teistel lehtedel juurde) -->
  <div class="main-top-2"></div>
  <div id="navigation">
        <ul>
				<li class="first"><a title="Avaleht" href="/index.html">Avaleht</a></li>
                <li> <a title="Kirjakast" href="/kirjad.html">Kirjakast</a></li>
                <li> <a title="Profiil" href="/profiil.php">Minu profiil</a></li>
                <li> <a title="Mängi" href="/mng.html">MÄNGIMA</a> </li>
                <li> <a title="Edetabel" href="/tabel.html">Edetabel</a> </li>
				<li><a title="Login" href="/login.html">Sisene</a></li>
				<li><a title="Abi" href="/abi.html">Abi</a></li>
				</ul>
                  <div class="cl"></div>
              </div>
              <!-- END Navigation -->
              <!-- Main -->
              <div id="main">
                 <div class="main-top-2"></div>
                  <div id="main-middle">
                      <!-- Content -->
                      <div id="content">
                          <div class="post">
                       <h2>Tere tulemast, <?php

					echo $_SESSION["username"];
					lae_profiil($_SESSION["username"]);

					?> !</h2> 
                    <h3><strong> Sinu hetkeseis: </strong> </h3>
                    <h3>Kogu raha:  <?php

					echo $_SESSION["fame"];

					?></h3>
                    
                    <h3>Käesolev raha:  <?php

					echo $_SESSION["money"];

					?></h3>
                    
                    <h3>Kasutaja loodud:  <?php

					echo $_SESSION["time_created"];

					?></h3> </div>


                              
                            
                          <div class="post games">
                              <h2>Profiili muutmine:</h2>
                             
                              
                          </div>
                      </div>
                      <!-- END Content -->
                      <!-- Sidebar -->
                    <div id="külgriba">
                          <div class="pildid">
                              <img src="css/images/profiilipilt.png" width="60%"  alt =""/>
                        </div>
                          
                      
                      </div>
                      <!-- END Sidebar -->
                    <div class="cl"></div>
                  </div>
              </div>
              <!-- END Main -->
              <!-- Footer -->
              <div id="footer">
                  <p align="left" class="copy">Copyright 2015<span>|</span>Tiim RHT</p>
                  <p id="bottom-nav"><a title="Home" href="#">Avaleht</a><span>|</span><a title="Contacts" href="#">Kontakt</a></p>
                  <div class="cl"></div>
              </div>
              <!-- END Footer -->
          </div>
          <!-- END Shell -->
      </div>
      <!-- END Wrapper -->
  </body>
  </html>