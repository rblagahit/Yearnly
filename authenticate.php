<?php
require_once("classes/AutoLoader.php");
$user = new User($_POST);
if(!$user->IsAuthenticated()){
	$error = base64_encode("Wrong email or password.");
	header("Location:index.php?id=".$error);
}else{
	header("Location: home.php");
}

?>