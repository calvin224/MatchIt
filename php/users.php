<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$true = 1;
$sql = "SELECT * FROM users u JOIN matchingtable m ON u.unique_id=m.UserA_ID WHERE m.Status = \"accepted\" AND u.unique_id != {$outgoing_id} 
AND (m.UserA_ID = {$outgoing_id} OR m.UserB_ID = {$outgoing_id})";
$query = mysqli_query($conn, $sql);
$output = "";
if(mysqli_num_rows($query) == 0){
    $output .= "No users are available to chat";
}elseif(mysqli_num_rows($query) > 0){
    include_once "data.php";
}
echo $output;
?>
