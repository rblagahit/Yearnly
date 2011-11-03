<?php
require_once("class.Database.php");

class User{
	public $id;
	public $username;
	public $name;
	public $password;
	public $email;
	public $isauthenticated; //BOOL
	
	public $db;
	
	public function __construct($argData = NULL){
		$this->db = new Database("Yearnly");
		if($argData != NULL){
			if(isset($_POST["name"])){
				//New sign up
				$this->email = trim($_POST["email"]);
				$this->password = trim(sha1($_POST["password"]));
				$this->name = trim($_POST["name"]);
				$this->isauthenticated = $this->InsertUser();
			}else{
				//Log In user
				$this->email = trim($_POST["email"]);
				$this->password = trim(sha1($_POST["password"]));
				$this->AuthenticateUser();
			}
		}
	}
	
	private function AuthenticateUser(){
		$query = "select id from Users where username = '$this->username' AND password = '$this->password';";
		$userData = $this->db->query($query);
		if($userData){
			$this->isauthenticated = true;
			$this->id = $userData["id"];
		}
	}
	
	public function InsertUser(){
		$insertQuery = "INSERT INTO Users (email,name,password) VALUES ('$this->email', '$this->name', '$this->password');";
		if($this->db->insert($insertQuery)){
			return true;
		}else{
			return false;
		}
	}
}
?>