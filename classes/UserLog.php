<?php
require_once("Database.php");

class UserLog{
	private $db;
	private $userid;
	private $ipaddress;
	private $logindate;
	
	public function __construct($userid = NULL){
		//User ID MUST be provided
		if($userid != NULL){
			$this->userid = $userid;
			$this->logindate = date("Y-m-d H:i:s");
			$this->ipaddress = $_SERVER["REMOTE_ADDR"];
		}
	}
	
	public function LogUser(){
		$this->db = new Database("Yearnly");
		if(isset($this->userid)){
			$query = "INSERT INTO UserLog (userid, ipaddress, logindate) VALUES ('$this->userid', '$this->ipaddress' , '$this->logindate');";
			$this->db->insert($query);
		}
	}
	

}
?>