<?
session_start();
include_once "config.php";
$btnValue = $_POST['btnValue'];
$id = $_SESSION['unique_id'];
$hatched = "";
$topuser = "&#x1F525";

if($btnValue == 0) {
    $insert_query = mysqli_query($conn, "SELECT * , COUNT(matchingtable.UserB_ID) as totalcount from matchingtable GROUP BY matchingtable.UserB_ID ORDER BY totalcount DESC");
    $topuserarray = array();
    while ($row2 = mysqli_fetch_assoc($insert_query)) {
        array_push($topuserarray, $row2['UserB_ID']);
    }
    $topuserid = $topuserarray[0];
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET TopUser = '{$topuser}' WHERE unique_id = '{$topuserid}'");;
}

if($btnValue == 1){
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET NewHatch = '{$hatched}' WHERE unique_id = '{$id}'");;
    echo "success";
}
?>