<?php 

class User {

  public static function find_all_users(){
    return self::find_any("SELECT * FROM users");
  }


  public static function find_user_byID($n){
    $results_as_array = self::find_any("SELECT * FROM users WHERE id= $n");
    return !empty($results_as_array)? array_pop($results_as_array) : false;
    // we are returning an associative array, eventually we want it to be as props-on-object
  }





public static function find_any($sql){
  // function returns AN ARRAY
  // function takes A QUERY STRING
  // diaz has this in the calling func. but mine works. todo
  global $database;
  $set_from_SQL = $database->query($sql); //not an array yet
  $array_from_SQL = array();
  while($row = mysqli_fetch_array($set_from_SQL)  ){
    array_push($array_from_SQL, $row);
  }
  return $array_from_SQL ;
} 





private function has_the_attribute(){
  return true;  // TODO TODO c. L 47 diaz
}


 


//  Args: Associative Array
//  Returns: object->properties
public static function instantiate($user_object){
 $fresh_user = new self;
 foreach ($user_object as $key => $val){
    $fresh_user->key = $user_object[$key]; // double check dollar signs: more? less?
  }
 return $fresh_user;
}





}
?>


