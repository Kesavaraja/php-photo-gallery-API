<?php 
// database connection constants

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'gallery_db');


$connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

echo "This is the config.php.";
if($connection) {
	echo "Good connection, Evan.";
}

?>


