<!DOCTYPE html>
<html>
<body>

<?php
function Hind($worker){
    if($worker=='manager'){
                       if ($_SESSION["tech"] == 0) {
                       $hind_manager == 250 * max( $_SESSION["manager"], 1);
                       }
                       else {
                       $hind_manager ==  max( $_SESSION["manager"], 1) * 250 * $_SESSION["tech"];
                       } 

    
}   }

?>
</body>
</html>
