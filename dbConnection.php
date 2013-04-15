<?php
  define("CURRENT_SEM", "Spring 2013");

  $db_server = "localhost";
  $user = "root";
  $password = "root";
  $db_name = "signmeup";


  $conn=mysql_connect($db_server,$user,$password,$db_name);

  if(!$conn){
      die("Error connecting to database");
  }
  else {
      mysql_select_db($db_name, $conn);
  }

?>