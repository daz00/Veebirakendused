<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  
  <html xmlns="http://www.w3.org/1999/xhtml">
  <head>
      <title>CE: Code Empire</title>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
      <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
      <link rel="icon" type="image/png" href="css/images/ce.ico"/>
	  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js" type="text/jscript"></script>
    <script>
    FB.getLoginStatus(function(response) {
    statusChangeCallback(response);
        });
  $(document).ready(function() {
  $.ajaxSetup({ cache: true });
  $.getScript('//connect.facebook.net/en_US/sdk.js', function(){
    FB.init({
      appId: '830496170354322',
      version: 'v2.2' // or v2.0, v2.1, v2.0
    });     
    $('#loginbutton,#feedbutton').removeAttr('disabled');
    FB.getLoginStatus(updateStatusCallback);
  });
});
    </script>
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
           <div id ="ülapilt"><img src="css/images/vpilt.png" alt="Mingi decent pilt tuleb siia" width="101%" /></div>
                      
                          <!-- Menüü (Lisada teistel lehtedel juurde) -->
  <div class="main-top-2"></div>
  <div id="navigation">
        <ul>
				<li class="first"><a title="Avaleht" href="/index.php">Avaleht</a></li>
                <li> <a title="Kirjakast" href="/kirjad.php">Kirjakast</a></li>
                <li> <a title="Profiil" href="/profiil.php">Minu profiil</a></li>
                <li> <a title="Mängi" href="/mng.php">MÄNGIMA</a> </li>
                <li> <a title="Edetabel" href="/tabel.php">Edetabel</a> </li>
						
				</ul>
                  <div class="cl"></div>
              </div>
              <!-- END Navigation -->
              <!-- Main -->
              <div id="main">
			  <div class="main-top-2"></div>
				<div id="main-middle">