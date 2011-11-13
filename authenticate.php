<?php
require_once("classes/AutoLoader.php");
$user = new User($_POST);
if(!$user->IsAuthenticated()){
	header("Location:index.php");
}else{
	header("Location: home.php");
}

?>