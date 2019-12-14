<?php 

class User {

  public function find_all_users(){
    global $database;
    $result_set = $database->query("SELECT * FROM users");
    return $result_set;
  }

// User::find_user_byID

  public function find_user_byID($n){
    global $database;
    $result_mono = $database->query(
      "SELECT * FROM users WHERE id= $n");
    // return $result_mono; Ohhhh! Need a conversion here.
    $the_found_user = mysqli_fetch_array($result_mono);
    return $the_found_user; 
  }


}


?>