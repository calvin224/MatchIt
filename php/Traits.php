<?
session_start();
include_once "config.php";
$btnValue = $_POST['btnValue'];
$id = $_SESSION['unique_id'];
$hatched = 0;
if($btnValue == 1){
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET NewHatch = '{$hatched}' WHERE unique_id = '{$id}'");;
    echo "success";
}
?>