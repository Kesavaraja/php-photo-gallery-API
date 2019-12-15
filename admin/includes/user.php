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

private function has_the_attribute(){
  return true;  // TODO TODO c. L 47 diaz
}

public  function instantiate($user_object){
 $fresh_user = new self;
 foreach ($user_object as $key => $val){
  if($fresh_user->has_the_attribute()){
    $fresh_user->key = $val;
    echo "has--HAS--";
  }

 }
 echo "ho";
 return $fresh_user;
}




}
?>


