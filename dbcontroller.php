<?php
class DBController {
	private $host = "localhost";
	private $user = "root";
	private $password = "raikiri";
	private $database = "traffic";
	private $conn=null;
	function __construct() {
		$this->conn = $this->connectDB();
		
	}
	
	function connectDB() {
		$conn = new mysqli($this->host, $this->user, $this->password,$this->database);
		return $conn;
	}
	
	
	function runQuery($query) {
		$result = $this->conn->query($query);
		while($row=$result->fetch_assoc()) {
			$resultset[] = $row;
		}		
		if(!empty($resultset))
			return $resultset;
	}
	
	function numRows($query) {
		$result  = $this->conn->query($query);
		$rowcount = $result->num_rows;
		return $rowcount;	
	}
}
?>
