<?php
require_once("Database.php");
require_once("UserLog.php");

class User{
	public $id;
	public $username;
	public $name;
	public $password;
	public $email;
	private $authenticated; //BOOL
	private $logUser; //BOOL to stop logging of the LoadUserById function
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
					throw new Exception("The email or password was empty.");					
				}else{
					//Check for null password
					if($argData["password"] == NULL || trim($argData["password"] == "")){
						throw new Exception("The email or password was empty.");
					}else{
						$this->InsertUser();
					}
				}
			}else{
				//Log In user
				$this->email = trim($argData["email"]);
				$this->password = trim(sha1($argData["password"]));
				$this->logUser = true;
				$this->AuthenticateUser();
			}
		}
	}
	
	public static function LoadUserById($id){
		$query = "select email, password from Users where id = '$id'";
		$db = new Database("Yearnly");
		$userData = $db->query($query);
		if($userData){
			$user = new User();
			$user->email = trim($userData["email"]);
			$user->password = trim($userData["password"]);
			$user->logUser = false;
			$user->AuthenticateUser();
			return $user;
		}else{
			throw new Exception("User not authenticated.");
		}
		
		
	}
	
	private function AuthenticateUser(){
		$query = "select id, username, email, name from Users where email = '$this->email' AND password = '$this->password';";
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
			if($this->logUser){
				$userLog = new UserLog($this->id);
				$userLog->LogUser();
			}
		}else{
			throw new Exception("User not authenticated");
		}
	}
	
	private function InsertUser(){
		$insertQuery = "INSERT INTO Users (email,name,password) VALUES ('$this->email', '$this->name', '$this->password');";
		if($this->db->insert($insertQuery)){
			$_SESSION["userid"] = $this->db->GetLastId();
			$userLog = new UserLog($_SESSION["userid"]);
			$userLog->LogUser();
			$this->authenticated = true;
		}else{
			throw new Exception("Error creating user account.");
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