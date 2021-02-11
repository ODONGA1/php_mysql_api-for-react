<?php
$username="ugasharejobs";
$password='dongoLEE@2013';
$database="ugasharejobs";
//$db_host="127.0.0.1";
$db_host="localhost";

$mysqli = new mysqli($db_host,$username,$password,$database);
// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

?>