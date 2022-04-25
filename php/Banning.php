<?php
session_start();
include_once "config.php";
if (!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
$id = $_SESSION['unique_id'];
$idT = $_SESSION['TheirID'];
$id2 = $idT['unique_id'];
// Checking, if post value is
// set by user or not
if(isset($_POST['btnValue'])) {
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = '{$id2}'");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
    }
    // Getting the value of button
    // in $btnValue variable
    $btnValue = $_POST['btnValue'];
    $retVal = $_POST['retVal'];
    if ($btnValue == 1) {
            $insert_query = mysqli_query($conn, "INSERT INTO blacklisttable (ID,Email,Timestamp)
                                VALUES ('{$id2}','{$row['email']}','{$retVal}')");
            echo "success";
    } else if ($btnValue == 2) {
        $delete_query = mysqli_query($conn, "DELETE FROM blacklisttable WHERE ID = '{$id2}'");
        echo "success";
    }  else if ($btnValue == 3) {
        $insert_query = mysqli_query($conn, "INSERT INTO blacklisttable (ID,Email,Timestamp)
                                VALUES ('{$id2}','{$row['email']}','{$retVal}')");
        $delete_query = mysqli_query($conn, "DELETE FROM users WHERE unique_id = '{$id2}'");
        echo "success";
    }
}
?>
