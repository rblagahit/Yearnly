<?php
require_once("classes/AutoLoader.php");
$user = new User($_POST);
if(!$user->IsAuthenticated()){
	$errorString = "";
	foreach($user->errors as $error){
		$errorString .= $error;
	}
	$link = "error.php?id=".base64_encode($errorString);
	header("Location:".$link);
}
?>
<h1>You have signed up!</h1>
