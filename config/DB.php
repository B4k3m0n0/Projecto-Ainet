<?php 
	class model_DB{
		protected $conn;

		function __construct(){
			include ROOT_DIR.'config/dbacess.php'
			@ $this->conn = new mysqli($host, $user, $password, $database);
		}

		public function isConnected(){
			return ($this->conn && !$this->conn->connect_errno);
		} 
	}
?>