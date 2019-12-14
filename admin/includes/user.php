<?php 

class User {

  public static function find_all_users(){
    return self::find_any("SELECT * FROM users");
  }

// User::find_user_byID

  public static function find_user_byID($n){
    $results_as_mysqli = self::find_any("SELECT * FROM users WHERE id= $n");
    return mysqli_fetch_array($results_as_mysqli);
  }

public static function find_any($sql){
  global $database;
  $result_set = $database->query($sql);
  return $result_set;
} 

public  function instantiate(){
 $built_user = new self;
 // $built_user->password = $this[password];
 return $built_user; 
}

}


?>