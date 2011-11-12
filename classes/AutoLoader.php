<?php
session_start();
function __autoload($classname){
	require_once($_SERVER["DOCUMENT_ROOT"]."/Yearnly/classes/".$classname.".php");
}


?>