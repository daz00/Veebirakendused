 <?php
include "header_reg.php";
?>
				<!-- Content -->
				  <div id="login">
						<div class="login">
							<h2>Registreeru!</h2>
							<p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id molestie enim. Suspendisse consequat urna non ante gravida euismod. In in nibh vestibulum at tellus viverra nulla.</strong></p>
							<div class="info">
                            <div class="kasutaja">
                            <form name= "registreerimine" action="insert.php" method="post">
							 <div class = "ymbris"><p> Sisesta kasutajanimi:
                                <input type="text" name="kasutaja_nimi" id= "kasutaja_nimi" /></p></div>
                                 <div class = "ymbris"> <p>Sisesta salasõna:
                                   <input type="password" name="parool_1" id="parool_1" onKeyUp="checkPass(); return false;"/> </p></div>
                                     <div class = "ymbris"><p>Sisesta salasõna uuesti:
                                   <input type="password" name="parool_2" id="parool_2" onKeyUp="checkPass(); return false;" /> </p></div>
                                    <div class = "ymbris"> <p>Sisesta e-mail:
                                   <input type="text" name="email_1" id= "email_1" onKeyUp="checkMail(); return false;"/> </p></div>
                                    <div class = "ymbris"> <p>Sisesta e-mail uuesti:
                                   <input type="text" name="e_mail2"  id= "email_2" onKeyUp="checkMail(); return false;"/> </p></div>
                                  
                                <input type="submit" name="Loo kasutaja" value="Registreeri!" class="submit" onClick="ValidateForm(); return false;" />
                                   </form>
                           </div>
                           <p id="confirm"> </p>
                           </div>
                           <div>
                                </div>
        
		<h2>Alternatiivselt logi sisse kasutades:</h2>
                            <a href="http://www.twitter.com"><img src="css/images/twitter.svg" alt="Mingi decent pilt tuleb siia" width="10%" /></a> 
                             <a href="http://www.facebook.com"><img src="css/images/logotype3.svg" alt="Mingi decent pilt tuleb siia" width="10%"/>	</a>
                             <a href="https://plus.google.com">
                            <img src="css/images/google.svg" alt="Mingi decent pilt tuleb siia" width="10%" /></a>  
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