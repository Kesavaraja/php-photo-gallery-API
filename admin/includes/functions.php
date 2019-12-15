<?php 

// This is the first time I ever saw this strategy.  Write it in notes...

function __autoload($class){
  $class = strtolower($class);
  $the_path = "includes/{$class}.php";
  // not sure why this works w/o a ".." Must work relative to what called it.  TODO
  if(file_exists($the_path)){
    include_once($the_path);
  } else {
    die("Looked for ((({$class}.php))) but found nought.");
  }
}

?>