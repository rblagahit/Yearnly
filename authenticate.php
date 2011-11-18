<?php
require_once("classes/AutoLoader.php");
session_unset();
try{
	$user = new User($_POST);
	header("Location: home.php");
}catch(Exception $e){
	header("Location: index.php?id=".base64_encode($e->getMessage()));
}
?>