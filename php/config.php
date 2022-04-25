<?php
$hostname = "localhost";
$username = "id18657714_matchitadmin";
$password = "@zTqe7/L34V4gJx=";
$dbname = "id18657714_matchit";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if(!$conn){
    echo "Database connection error".mysqli_connect_error();
}
?>