<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$true = 1;
$sql = "SELECT * FROM users u JOIN matchingtable m ON u.unique_id=m.UserA_ID WHERE m.Status = \"pending\" AND m.UserB_ID = {$outgoing_id}";
$query = mysqli_query($conn, $sql);
$output = "";
if(mysqli_num_rows($query) == 0){
    $output .= "No match requests";
}elseif(mysqli_num_rows($query) > 0){
    include_once "InMatchData.php";
}
echo $output;
?>