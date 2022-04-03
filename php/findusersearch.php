<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$searchTerm = mysqli_real_escape_string($conn, $_POST['searchTerm']);
$true = 1;
$output = "";
$sql = "SELECT * from users LEFT JOIN profiletable ON profiletable.unique_id=users.unique_id WHERE Completed = {$true} AND (profiletable.description LIKE '%{$searchTerm}%') AND NOT users.unique_id = {$outgoing_id}";
$query = mysqli_query($conn, $sql);
if(mysqli_num_rows($query) > 0){
    include_once "findusertable.php";
}else{
    $output .= 'No user found related to your search term';
}
echo $output;
?>