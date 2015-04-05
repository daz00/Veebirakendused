<?php
include "header_login.php";
?>
                    <!-- Content -->

                    <div id="login">
                    <div id = "fb-root"></div>

                        <div class="login">

                            <h2>Kasutaja olemas? Logi sisse!</h2>

                            <p><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras id molestie enim. Suspendisse consequat urna non ante gravida euismod. In in nibh vestibulum at tellus viverra nulla.</strong></p>

                            <div class="info">

                                <div class="kasutaja">

                                    <form name="registreerimine" action="login_check.php" method="post">

                                        <div class="ymbris">

                                            <p>

                                                Sisesta kasutajanimi:

                                                <input type="text" name="kasutaja_nimi" id="kasutaja_nimi" />

                                            </p>

                                        </div>

                                        <div class="ymbris">

                                            <p>

                                                Sisesta salasõna:

                                                <input type="password" name="parool" id="parool" />

                                            </p>

                                        </div>

                                        <input type="submit" name="Logi sisse" value="Sisene!" class="submit" />

                                    </form>

                                </div>

                            </div>

                            <h2> Pole kasutajat? Registreeru! </h2>

                            <p><strong>Registreerumine võtab vaid hetke.</strong></p>

                            <div class="ymbris">

                                <a title="Loo kasutaja!" class="mängi" href="/reg.php">Registreeru</a>

                            </div>



                            <h2>Alternatiivselt logi sisse kasutades:</h2>
                            <a href="http://www.twitter.com"><img src="css/images/twitter.svg" alt="" width="10%" /></a>
                            <a href = "profiil.php"><img src="css/images/facebook29.svg" alt="" width="10%"/></a>
                            

                            <a href="https://plus.google.com">

                                <img src="css/images/google.svg" alt="" width="10%" />

                            </a>

                        </div>
						<div id="return"></div>
                    </div>

                    <!-- END Content -->

                    <!-- Sidebar -->

                    <div id="külgriba"></div>

                    <!-- END Sidebar -->

                    <div class="cl"></div>

<?php              
include "footer.php";
?>