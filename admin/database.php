<?php 
// goes with init
// goes with config
// notice the use of class. OO!

// notice the ONCE here
require_once("config_new.php");

class Database {
	// so that it's available outside of here;
	public $connection;

	function __construct(){
		$this->open_db_connection();
		echo "Hey we opened maybe a db in database.php";
	}

	public function open_db_connection(){
		$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if(mysqli_connect_errno()){
			die("db connxn failed barfily" . mysqli_error());
		}
	}



public function query($sql){
	if(!$sql){ 
		die("Sql failed.");
	}
	if(!$this->connection){ 
		die("Your connection is AWOL.");
	}
	$result = mysqli_query($this->connection, $sql);
	if(!$result){ 
		die("Query failed.");
	}
	return $result; 
}


public function escape_string($string) {
	$escaped_string = mysqli_real_escape_string($this->connection, $string);
	return $escaped_string;
}

} // end DATABASE class

$database = new Database();

echo "about to create a new database object in database.php";
echo "we just created a new database object in database.php";

?>