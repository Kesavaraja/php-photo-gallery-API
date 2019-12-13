<?php 
// goes with init
// goes with config
// notice the use of class. OO!

// notice the ONCE here
require_once("config.php");

class Database {
	// so that it's available outside of here;
	public $connection;
	function __construct(){
		$this->open_db_connection
	}

	public function open_db_connection(){
		$this->connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
		if(mysqli_connect_errno()){
			die("db connxn failed barfily" . mysqli_error());
		// SEEMS FISHY. REMOVE! $database->open_db_connection();

		}

	}

// this is wanted OUTSIDE OF HERE but not global.  Solution: make it a property

echo "This is the config.php.";
if($connection) {
	echo "Good connection, Evan.";
}

}

$database = new Database();

?>