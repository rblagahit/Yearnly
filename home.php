<?php
require_once("classes/class.User.php");
$user = new User($_POST);
if(!$user->IsAuthenticated()){
	header("Location:error.php");
}
echo "Below is how the session data is laid out:<br />";
print_r($_SESSION);
?>
<h1>Logged in!</h1>