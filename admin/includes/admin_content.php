<div class="container-fluid">

<?php
  // todo not sure if this is the correct place; it sure seemed to help
  require_once("database.php");
?>

<!-- Page Heading -->
<div class="row">
  <div class="col-lg-12">
    <h1 class="page-header">
      Admin content<small>full hearts, bright eyes, can't lose</small>
    </h1>

<?php
  //        ----QUERY---
  $sql = "SELECT * FROM `users` WHERE id=400";
  if(!$database){ 
    die("No db object created yet.");
  } else {        
    $result = $database->query($sql);
    $user_found = mysqli_fetch_array($result);
    echo $user_found['username'];
  }
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
