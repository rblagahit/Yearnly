<?php
require_once("classes/class.User.php");
$user = new User($_POST);
if(!$user->isauthenticated){
	header("Location:error.php");
}
?>
<h1>Logged in!</h1>