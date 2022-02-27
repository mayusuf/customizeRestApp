<?php 

namespace Api\Controller;

include('../db/MysqlDatabaseConn.php');
include('../api/SecurityTrait.php');

final class AccountEntity 
{
	use SecurityTrait;

	private $data = [];
	private $table = "accounts";
	private $sql;

	public function __construct(){
		
	}
	
	public function insert($request){			
		
		
		$this->sql = "Insert into $this->table values('".$this->escapeSQLinjection($request['name'])."','".$this->escapeSQLinjection($request['image'])."')";

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