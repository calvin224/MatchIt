<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['unique_id'];
$sql = "SELECT * from hobbiestable LEFT JOIN availablehobbiestable ON hobbiestable.InterestID = availablehobbiestable.InterestID WHERE unique_id = {$outgoing_id};";
$query = mysqli_query($conn, $sql);
$output = "";
if(mysqli_num_rows($query) == 0){
    $output .= "";
}elseif(mysqli_num_rows($query) > 0){
    include_once "UPHobbiesInterestsData.php";
}
echo $output;
?>