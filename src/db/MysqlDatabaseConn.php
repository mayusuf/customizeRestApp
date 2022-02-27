<?php 

namespace Api\Controller;

interface DBConntectionInterface{

	public static function connection();
}

class MysqlDatabaseConn implements DBConntectionInterface
{
	
	private $data = [];
	
	private static $servername = "127.0.0.1:3306";
	private static $username = "root";
	private static $password = "";
	private static $db = "test";

	private  $dbh;

	public static $conn;

	// public function __construct(){

	// 	self::connection();
		
	// }

	public static function connection(){

		self::$conn = mysqli_connect(self::$servername, self::$username, self::$password, self::$db);

		// Check connection
		if (self::$conn->connect_error) {
		  die("Connection failed: " . self::$conn->connect_error);
		}

		// echo "Connected successfully";

		if(isset(self::$conn)){

		        self::$conn;
			}
		    else{
		        self::$conn = new self();		        
		        
		}
		
	}
	
}

MysqlDatabaseConn::connection();

?>