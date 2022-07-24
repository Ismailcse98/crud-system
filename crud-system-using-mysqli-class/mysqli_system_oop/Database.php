<?php 
include "config.php";
class Database{
	public $host = HOST_NAME;
	public $user = USER_NAME;
	public $pass = PASSWORD;
	public $db   = DB_NAME;

	public $link;
	public $error;
	public function __construct(){
		$this->connectDB();
	}

	private function connectDB(){
		$this->link = new mysqli($this->host,$this->user,$this->pass,$this->db);
		if(!$this->link){
			$this->error = "Connenction failed".$this->link->connect_error;
			return false;
		}
	}
	//Insert Data
	public function Insert($sql){
		$result = $this->link->query($sql) or die($this->link->error.__LINE__);
		if($result){
			return $result;
		}else{
			return false;
		}
	}

	// Read or Select Data
	public function Select($sql){
		$result = $this->link->query($sql) or die($this->link->error.__LINE__);
		if($result->num_rows > 0){
			return $result;
		}else{
			return false;
		}
	}

	// Update Data
	public function Update($sql){
		$result = $this->link->query($sql) or die($this->link->error.__LINE__);
		if($result){
			return $result;
		}else{
			return false;
		}
	}

	// Delete Data
	public function Delete($sql){
		$result = $this->link->query($sql) or die($this->link->error.__LINE__);
		if($result){
			return $result;
		}else{
			return false;
		}

	}

	
}

?>