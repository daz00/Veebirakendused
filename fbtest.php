<?php
 $ch = curl_init("http://graph.facebook.com/?ids=http://www.google.com");    // initialize curl handle

    $data = curl_exec($ch);
    print($data);
    ?>