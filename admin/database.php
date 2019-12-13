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
		$this->connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if($this->connection->connect_errno){
			die("db connxn failed barfily" . $this->connection->connect_error);
		}
	}


public function query($sql){
	if(!$sql){ 
		die("Sql failed.");
	}
	if(!$this->connection){ 
		die("Your connection is AWOL.");
	}
	$result = $this->connection->query($sql);
	$this->outcome_success($result);
	return $result; 
}


private function outcome_success($any){
	if(!$any){ 
		die("Result null for some reason in database.php!");
	}
}



public function escape_string($string) {
	$escaped_string = mysqli_real_escape_string($this->connection, $string);
	return $escaped_string;
}

} // end DATABASE class

// todo debugging
$database = new Database();
if (!$database) {
    echo "Failed to create a db.";
} else {
    echo "Succeeded in creating a NEW \$database object.";
}

?>