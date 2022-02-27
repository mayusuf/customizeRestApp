<?php 

namespace Api\Controller;

include('../db/MysqlDatabaseConn.php');


final class AccountEntity 
{
	
	private $data = [];
	private $table = "accounts";
	private $sql;

	public function __construct(){
		
	}
	
	public function insert($request){			
		
		$this->sql = "Insert into $this->table values('".$request['name']."')";

		if(MysqlDatabaseConn::$conn->query($this->sql) === TRUE)
			return "New record create successfully";

		// if ($result = MysqlDatabaseConn::$conn->query()) {
		//   echo "Returned rows are: " . $result -> num_rows;
		//   // Free result set
		//   $result -> free_result();
		// }

	}
}

 
?>