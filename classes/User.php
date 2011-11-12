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
		$this->errors = array();
		$this->db = new Database("Yearnly");
		if($argData != NULL){
			if(isset($_POST["name"])){
				//New sign up
				$this->email = trim($argData["email"]);
				$this->password = trim(sha1($argData["password"]));
				$this->name = trim($argData["name"]);
				//Check for null email
				if($argData["email"] == NULL || trim($argData["email"]) == ""){
					$this->errors[] = "The email or password was empty.";					
				}else{
					//Check for null password
					if($argData["password"] == NULL || trim($argData["password"] == "")){
						$this->errors[] = "The email or password was empty.";
					}else{
						$this->authenticated = $this->InsertUser();
					}
				}
			}else{
				//Log In user
				$this->email = trim($argData["email"]);
				$this->password = trim(sha1($argData["password"]));
				$this->AuthenticateUser();
			}
		}
	}
	
	public static function LoadUserById($id){
		$query = "select email, password from Users where id = '$id'";
		$db = new Database("Yearnly");
		$userData = $db->query($query);
		if($userData){
			return new User($userData);
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