<?php

class Database {
	public $mysql;
	
	function __construct($db){
		$this->mysql = new mysqli('localhost', 'root','root',$db) or die('There was a problem connecting to the db');
	
	}
	
	
	public function query($sql){
	//This is for multiple Result sets
		if(($result = $this->mysql->query($sql)) != NULL){
			if($result->num_rows <= 1){
				$row = $result->fetch_assoc();
				return $row;
			}else{
			while($row = $result->fetch_assoc()){
				$data[] = $row;
				}
			return $data;
			}
		
		}else{
		
			return false;
		}
	
	}

	
	public function insert($insertSql){
		if($result = $this->mysql->query($insertSql)){
			return true;
		}else{
			return false;
		}
	
	}
	
	public function update($updateSql){
		if($result = $this->mysql->query($updateSql)){
			return true;
		}else{
			return false;
		}
	
	}
	
	public function delete($deleteSql){
		if($result = $this->mysql->query($deleteSql)){
			return true;
		}else{
			return false;
		}
	
	}
	
	function __destruct() {
    	// close out the database connection;
    	$this->mysql->close();
  	}


}

?>