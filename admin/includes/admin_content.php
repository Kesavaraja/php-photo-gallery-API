<div class="container-fluid">

<?php
  // todo not sure if this is the correct place; both sure seemed to help
  // require_once("database.php");

    require_once "init.php"; // my hack but seems wrong

?>

<!-- Page Heading -->
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Admin content<small>full hearts, bright eyes, can't lose</small>
    </h1>

<?php
  //        ----QUERY TEST---
  $sql = "SELECT * FROM `users` WHERE id=400";
  if(!$database){ 
    die("No db object created yet.");
  } else {        
    $result = $database->query($sql);
    $user_found = mysqli_fetch_array($result);
    // echo $user_found['username']; uncomment to test!
  }

  //        ----USER.php TEST 1---
  $all_users = User::find_all_users();
  foreach ($all_users as $r){
    if(!$r){
      die ("There's no THERE there.");
    } else {
      echo("This user: ". $r['username'] . $r['password']);
    }
  }

  //        ----USER.php TEST 2---
  $test_mono = User::find_user_byID(100);
  if(!$test_mono){
    die ("There's no THERE there.");
  } else {
    echo("IN MONO found ". $test_mono['username']);
  }

  //        ----INSTANTIATE A USER AFTER FOUND, TEST---
  $found_user = User::find_user_byID(400);
  $showable_user = User::instantiate($found_user);
  echo "it   made this    for   a userrrrr: ";
  print_r ($showable_user);

  $users = User::find_all_users()
  
?>

<!-- from lecture 30 hope I wrote this right -->
<?php if($database->connection) {echo "true";} ?>

  <ol class="breadcrumb">
    <li>
      <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
    </li>
    <li class="active">
      <i class="fa fa-file"></i> Blank Page
    </li>
  </ol>
  </div>
</div>
<!-- /.row -->

</div>
<!-- /.container-fluid -->

<!-- Brian: Can I just crash your party? What person can be on city council?   -->
