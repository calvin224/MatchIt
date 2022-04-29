<?php
session_start();
include_once "config.php";
$outgoing_id = $_SESSION['TheirID'];
$other_user_id = $outgoing_id['unique_id'];
$sql = "SELECT * from hobbiestable LEFT JOIN availablehobbiestable ON hobbiestable.InterestID = availablehobbiestable.InterestID WHERE unique_id = {$other_user_id};";
$query = mysqli_query($conn, $sql);
$output = "";
if(mysqli_num_rows($query) == 0){
    $output .= "";
}elseif(mysqli_num_rows($query) > 0){
    include_once "OtherUPHobbiesInterestsData.php";
}
echo $output;
?>