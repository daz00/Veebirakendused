<?php
session_start();
// added in v4.0.0
require_once 'autoload.php';
	use facebook\FacebookSession;
    use facebook\FacebookRedirectLoginHelper;
    use facebook\FacebookRequest;
    use facebook\FacebookResponse;
    use facebook\FacebookSDKException;
    use facebook\FacebookRequestException;
    use facebook\FacebookAuthorizationException;
    use facebook\GraphObject;
	use facebook\AccessToken;

// init app with app id and secret
FacebookSession::setDefaultApplication( '830496170354322','401444bc0ad8c4b9d537c5c8fa10c515' );
// login helper with redirect_uri
    $helper = new FacebookRedirectLoginHelper('http://www.koodiimpeerium.esy.es/fbconfig.php' );
try {
  $session = $helper->getSessionFromRedirect();
} catch( FacebookRequestException $ex ) {
  // When Facebook returns an error
} catch( Exception $ex ) {
  // When validation fails or other local issues
}
// see if we have a session
if ( isset( $session ) ) {
	window.alert("HEY ISSET SESSION");
  // graph api request for user data
  $request = new FacebookRequest( $session, 'GET', '/me' );
  $response = $request->execute();
  // get response
  $graphObject = $response->getGraphObject();
     	$fbid = $graphObject->getProperty('id');              // To Get Facebook ID
 	    $fbfullname = $graphObject->getProperty('name'); // To Get Facebook full name
	    $femail = $graphObject->getProperty('email');    // To Get Facebook email ID
	/* ---- Session Variables -----*/
	    $_SESSION['FBID'] = $fbid;           
        $_SESSION['FULLNAME'] = $fbfullname;
	    $_SESSION['EMAIL'] =  $femail;
    /* ---- header location after session ----*/
	
	$dbusername = "u179834919_admin";
    $dbpassword = "123456";
    $dbservername = "mysql.hostinger.ee";
	$dbname = "u179834919_baas";
	
	checkuser($fbid, $fbfullname,$femail);
	
function checkuser($fbid,$fbfullname,$femail){
    	$check = mysql_query("select * from Users where Fuid='$fuid'");
	$check = mysql_num_rows($check);
	if (empty($check)) { // if new user . Insert a new record		
	$query = "INSERT INTO Users (FB_ID,username,email) VALUES ('$fbid','$fbfullname','$femail')";
	mysql_query($query);	
	} else {   // If Returned user . update the user record		
	$query = "UPDATE Users SET username='$fbfullname', email='$femail' where FB_ID='$fbid'";
	mysql_query($query);
	}
}
	
  header("Location: profiil.php");
} else {
  $loginUrl = $helper->getLoginUrl();
 header("Location: ".$loginUrl);
}
?>