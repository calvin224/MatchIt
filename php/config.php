<?php
$hostname = "localhost";
$username = "id18595540_matchitadmin";
$password = "Hwq*e!qHl4C0EN)*";
$dbname = "id18595540_matchit";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
  echo "Database connection error".mysqli_connect_error();
}
?>
