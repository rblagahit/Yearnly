<?php
require_once("class.Database.php");

class User{
	public $id;
	public $userName;
	public $passWord;
	public $isAuthenticated //BOOL
	
	public $db;
	
	public __construct($argData = NULL){
		$this->db = new Database("Yearnly");
		if($argData != NULL){
			$this->userName = $_POST["username"];
			$this->passWord = $_POST["password"];
		}
	}
	
	private AuthenticateUser(){
		
	}
}
?>