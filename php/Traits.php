<?
session_start();
include_once "config.php";
$btnValue = $_POST['btnValue'];
$id = $_SESSION['unique_id'];
$hatched = 0;
$topuser = 1;

if($btnValue == 0) {
    $insert_query = mysqli_query($conn, "SELECT * , COUNT(matchingtable.UserB_ID) as totalcount from matchingtable GROUP BY matchingtable.UserB_ID ORDER BY totalcount DESC");
    $topuser = array();
    while ($row2 = mysqli_fetch_assoc($insert_query)) {
        array_push($topuser, $row2['UserB_ID']);
    }
}

if($btnValue == 1){
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET NewHatch = '{$hatched}' WHERE unique_id = '{$id}'");;
    echo "success";
}
?>