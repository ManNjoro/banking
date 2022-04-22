<?php

class Database
{
	private $host;
	private $username;
	private $Password;
	private $dbname;
	private $conn;	
	public function  __construct(){
		$this->host="localhost";
		$this->username="root";
		$this->password="";
		$this->dbname="bank";
		try{
			$this->conn = new PDO("mysql:host=$this->host;dbname=$this->dbname;",$this->username, $this->password);
		}catch(PDOException $error){
			print($error->getmessage());
		}
	}
	public function connect()
	{
		return $this->conn;

	}
}
