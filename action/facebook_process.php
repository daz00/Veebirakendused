<?php 
use Facebook\FacebookSession;
use Facebook\FacebookRequest;
use Facebook\GraphObject;
use Facebook\GraphUser;

// used to return json-encoded data
$obj = new StdClass();
// default status: true (success)
$obj->status = true;

// the facebook token cookie is not set
if(!isset($_COOKIE['fb_token'])) {
    // logout
    // unset all the session's variables
    session_unset();

    $obj->status = false;
    $obj->message = 'Logout';
    die(json_encode($obj));
}

// I'm already logged in
if($_SESSION['username'] !== false) {
    $obj->message = 'Already logged in';
    die(json_encode($obj));
}

// load the facebook SDK (v.4.0)
// see https://github.com/facebook/facebook-php-sdk-v4

// yes, you need all of them.
require_once('facebook/FacebookSession.php');
require_once('facebook/FacebookRedirectLoginHelper.php');
require_once('facebook/FacebookRequest.php');
require_once('facebook/FacebookResponse.php');
require_once('facebook/FacebookSDKException.php');
require_once('facebook/FacebookRequestException.php');
require_once('facebook/FacebookOtherException.php');
require_once('facebook/FacebookAuthorizationException.php');
require_once('facebook/GraphObject.php');
require_once('facebook/GraphUser.php');
require_once('facebook/GraphSessionInfo.php');

FacebookSession::setDefaultApplication('830496170354322', '401444bc0ad8c4b9d537c5c8fa10c515');

// bind the JavaScript SDK session token with the PHP SDK
$session = new FacebookSession($_COOKIE['fb_token']);

// in case someone manually changed the cookie
// or the session expired...
try {
    $session->validate();
} catch (FacebookRequestException $ex) {
    $obj->status = false;
    $obj->message = 'Invalid facebook session';
    $obj->more = $ex->getMessage();
    die(json_encode($obj));
} catch (\Exception $ex) {
    $obj->status = false;
    $obj->message = 'Graph API error';
    $obj->more = $ex->getMessage();
    die(json_encode($obj));
}

// session ok, retrieve data
try {
    $request = new FacebookRequest($session, 'GET', '/me');
    // this means: retrieve a GraphObject and cast it as a GraphUser (as /me returns a GraphUser object)
    $me = $request->execute()->getGraphObject(GraphUser::className());
} catch (FacebookRequestException $ex) {
    $obj->status = false;
    $obj->message = 'Facebook Request error';
    $obj->more = $ex->getMessage();
    die(json_encode($obj));
} catch (\Exception $ex) {
    $obj->status = false;
    $obj->message = 'Generic Facebook error';
    $obj->more = $ex->getMessage();
    die(json_encode($obj));
}

// setup the user object
$user = new StdClass();
$user->facebookId = $me->getId();
$user->name = $me->getName();
$user->firstName = $me->getFirstName();
$user->lastName = $me->getLastName();
$user->email = $me->getProperty('email');   // some properties don't have a specific method
;

// insert here the object in your database (insert on key exists update, for example)
// PDO, MySQLi, MongoClient...

	$dbusername = "u179834919_admin";
    $dbpassword = "123456";
    $dbservername = "mysql.hostinger.ee";
	$dbname = "u179834919_baas";
	try {
  $pdo = new PDO('mysql:host=mysql.hostinger.ee;dbname=u179834919_baas', $dbusername, $dbpassword);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
  $sql = "INSERT INTO Users (username, FB_ID, email) VALUES ($user->name, $user->facebookId, $user->email)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
    ':username' => $user,
	':password' => $pass,
	':email' => $email
  ));
 
  # Affected Rows?
  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}
try{
 $sql = "INSERT INTO Data (username) VALUES ($user->name)";
  $stmt = $pdo->prepare($sql);
  $stmt->execute(array(
    'username' => $user
  ));
 
  # Affected Rows?
  echo $stmt->rowCount();
} catch(PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}


// insert the user data in the session
// you can alternatively serialise the object and save it all in one $_SESSION variable
$_SESSION['userid'] = $me->getId(); // the facebook user's id
$_SESSION['username'] = $user->name; // short of firstname lastname
$_SESSION['user_email'] = $user->email // may be used to integrate a multi-language content system

?>