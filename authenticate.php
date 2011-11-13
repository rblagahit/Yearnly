<?php
require_once("classes/AutoLoader.php");
session_unset();
$user = new User($_POST);
if(!$user->IsAuthenticated()){
	header("Location:index.php?id=".$user->GetErrorString());
}else{
	header("Location: home.php");
}

?>