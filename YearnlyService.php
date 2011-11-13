<?php
require_once("classes/AutoLoader.php");
$call = $_POST["call"];


if($call == "dupcheck"){
	//Email duplicate checker
	EmailDuplicateChecker();
}

function EmailDuplicateChecker(){
	$db = new Database("Yearnly");
	$email = trim($_POST["email"]);
	$query = "select id from Users where email = '$email';";
	$data = $db->query($query);
	if($data){
		//if a row is return the email is already in the system.
		echo "true";
	}else{
		echo "false";
	}
}

?>