<?php 

abstract class DB{
	private $user;
	private $pass;
	private $host;
	private $db;
	public static $pdo;

	public function __construct(){
		require "classes/config_db.php";
		
		$this->user = $user;
		$this->pass = $pass;
		$this->host = $host;
		$this->db = $db;
	}

	private function conn(){		
		try{
			static::$pdo = new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}

	public function getConn(){
		return $this->conn();
	}
}
