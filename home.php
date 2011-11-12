<?php
require_once("classes/AutoLoader.php");

$user = User::LoadUserById($_SESSION["userid"]);


?>
<h1>Logged in!</h1>