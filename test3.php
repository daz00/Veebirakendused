<?php

include "header.php";

if(!isset($_SESSION['username'])){
	$_SESSION['viimaneleht'] = 'test3.php';
	echo '<div id="login"><h2>Lehe vaatamiseks logi sisse!!</h2>';

echo '<div class="mängi"><a title="Mängima!" class="mängi" href="/login.php">Mängima !</a></div> </div>';
} else {

echo '<div class="login"><h2>Siia tuleb sisu</h2> </div>';}

include "footer.php";

?>