<?php
require_once("Database.php");

class User{
	public $id;
	public $username;
	public $name;
	public $password;
	public $email;
	private $authenticated; //BOOL
	public $errors;
	private $db;
	
	public function __construct($argData = NULL){
		session_start();
		$this->errors = array();
		$this->db = new Database("Yearnly");
		if($argData != NULL){
			if(isset($_POST["name"])){
				//New sign up
				$this->email = trim($_POST["email"]);
				$this->password = trim(sha1($_POST["password"]));
				$this->name = trim($_POST["name"]);
				//Check for null email
				if($_POST["email"] == NULL || trim($_POST["email"]) == ""){
					$this->errors[] = "The email or password was empty.";					
				}else{
					//Check for null password
					if($_POST["password"] == NULL || trim($_POST["password"] == "")){
						$this->errors[] = "The email or password was empty.";
					}else{
						$this->authenticated = $this->InsertUser();
					}
				}
			}else{
				//Log In user
				$this->email = trim($_POST["email"]);
				$this->password = trim(sha1($_POST["password"]));
				$this->AuthenticateUser();
			}
		}
	}
	
	private function AuthenticateUser(){
		$query = "select * from Users where email = '$this->email' AND password = '$this->password';";
		$userData = $this->db->query($query);
		if($userData){
			$this->authenticated = true;
			$this->id = $userData["id"];
			$this->name = $userData["name"];
			$this->username = $userData["username"];
			$_SESSION["userid"] = $this->id;
			$_SESSION["name"] = $this->name;
			$_SESSION["email"] = $this->email;
			$_SESSION["username"] = $this->username;
		}
	}
	
	private function InsertUser(){
		$insertQuery = "INSERT INTO Users (email,name,password) VALUES ('$this->email', '$this->name', '$this->password');";
		if($this->db->insert($insertQuery)){
			return true;
		}else{
			$this->errors[] = $this->db->mysql->error;
			return false;
		}
	}
	
	public function IsAuthenticated(){
		if($this->authenticated){
			return true;
		}else{
			return false;
		}
	}
}
?>