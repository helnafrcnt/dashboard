<?php
  // declare database variables
  // change to the information relevant
  // to your database
  $username = "helna";
  $password = "helna";  
  $host = "localhost";
  $database="comm";
 
  // connect to database
  $server = mysql_connect($host, $username, $password);
  $connection = mysql_select_db($database, $server);
 
  // perform query
  // change the query to one relevant to your database
  $myquery = "
    SELECT  * FROM  `spider`
    ";
  $query = mysql_query($myquery);
 
  if ( ! $query ) {
    echo mysql_error();
    die;
  }
 
  // encode data to json format
  echo json_encode($data);  
 
  // close connection
  mysql_close($server);
?>