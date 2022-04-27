<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$true = 1;
$sql2 = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id = {$outgoing_id}");
if (mysqli_num_rows($sql2) > 0) {
    $row = mysqli_fetch_assoc($sql2);
}
$gender = $row['Gender'];
$sql = "SELECT * from users LEFT JOIN profiletable ON profiletable.unique_id=users.unique_id WHERE Completed = {$true}
                                                  AND profiletable.Gender = '{$row['Seeking']}'                                
                                                  AND NOT users.unique_id = {$outgoing_id}
                                                  ORDER BY user_id DESC;";
$query = mysqli_query($conn, $sql);
$output = "";
if(mysqli_num_rows($query) == 0){
    $output .= "";
}elseif(mysqli_num_rows($query) > 0){
    include_once "findusertable.php";
}
echo $output;
?>