<?php
require_once("class.Database.php");

class User{
	public $id;
	public $userName;
	public $passWord;
	public $isAuthenticated //BOOL
	
	public $db;
	
	public __construct($id = NULL){
		$this->db = new Database("test");
		if($id != NULL){
			//Load User info
		}
	}
}
?>