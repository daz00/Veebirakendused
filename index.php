<?php
session_start();
?>
 
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <title>CE: Code Empire</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
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
            <img src="css/images/pilt.png" alt="Asendub kunagi meie pildiga" width="100%" /></div>
                      
                          <!-- Menüü (Lisada teistel lehtedel juurde) -->
  <div class="main-top-2"></div>
  <div id="navigation">
        <ul>
				<li class="first"><a title="Avaleht" href="/index.php">Avaleht</a></li>
                <li> <a title="Kirjakast" href="/kirjad.php">Kirjakast</a></li>
                <li> <a title="Profiil" href="/profiil.php">Minu profiil</a></li>
                <li> <a title="Mängi" href="/mng.php">MÄNGIMA</a> </li>
                <li> <a title="Edetabel" href="/tabel.php">Edetabel</a> </li>
						<?php
				if(!isset($_SESSION['username'])){
				echo '<li><a title="Login" href="/login.php">Sisene</a></li>';
				} else {
				echo '<li><a title="Logout" href="/logout.php">Välju</a></li>';}
				?>
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
                              <h2>Siia tervitav sõnum ja/või tutvustus!</h2>
                              <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id molestie enim. Suspendisse consequat urna non ante gravida euismod. In in nibh vestibulum at tellus viverra nulla.</strong></p>
                              <p>Aliquam pulvinar. Maecenas nulla arcu, venenatis et ultrices id, tincidunt ut nisl. Etiam augue lectus,Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id molestie enim. Suspendisse consequat urna non ante gravida euismod. In in nibh nulla. Stibulum at tellus viverra nulla aliquam pulvinar. Maecenas nulla arcu, venenatis et ultrices id, tincidunt ut nisl. Maecenas nulla arcu, venenatis et ultrices id, tincidunt ut nisl. Etiam augue lectus,Lorem ipsum dolor sit amet, consect dolor sit amet adipising ultrices id, tincidunt ut nisl. </p>
                              <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id molestie enim. Suspendisse consequat urna non ante gravida euismod. In in nibh vestibulum at tellus viverra nulla.<br />
                              </strong>							</p>
                              
                              <div class="mängi"><a title="Mängima!" class="mängi" href="/login.html">Mängima !</a></div>
                          
                          <div class="uuendused">
                              <h2>Uuendused</h2>
                              <p>Võiks ju kuskil nendes ka rääkida?<br />
                              5.03.2014 - Leidsime lõpuks koha kuhu oma leht riputada. Jee.</p>
                              
                          </div></div>
                      
                      <!-- END Content -->
                      <!-- Sidebar -->
                    <div id="külgriba">
                          <div class="pildid">
                              <img src="css/images/filler.png" width="100%" longdesc="css/images/filler.png" alt =""/>
                        </div>
                          <div class="pildid">
                            <img src="css/images/filler.png" width="100%" longdesc="css/images/filler.png" alt = ""/> 
                        </div>
                      </div>
                      <!-- END Sidebar -->
                      </div>
                                        
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