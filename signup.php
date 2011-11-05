<?php
require_once("classes/class.User.php");
$user = new User($_POST);
if(!$user->IsAuthenticated()){
	header("Location:error.php");
}
?>
<h1>You have signed up!</h1>
