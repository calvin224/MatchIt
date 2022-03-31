<?php
session_start();
include_once "config.php";
if (!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
$id = $_SESSION['unique_id'];
$idT = $_SESSION['TheirID'];
$id2 = $idT['unique_id'];

if(isset($_POST['btnValue'])) {

    $btnValue = $_POST['btnValue'];
    if ($btnValue == 0) {
        $sql = mysqli_query($conn, "SELECT * FROM matchingtable WHERE UserA_ID = '{$id2}' AND UserB_ID = '{$id}' OR UserA_ID = '{$id}' AND UserB_ID = '{$id2}'");
        if (mysqli_num_rows($sql) == 0) {
        $time = time();
        $ran_id = rand(time(), 100000000);
        $Status = "pending";
        $insert_query = mysqli_query($conn, "INSERT INTO matchingtable (MatchID,UserA_ID,UserB_ID,Status)
                                VALUES ('{$ran_id}','{$id}', '{$id2}','{$Status}')");
        echo "success";
    }
        } else {
    if ($btnValue == 1) {
        $time = time();
        $ran_id = rand(time(), 100000000);
        $Status = "accepted";
        $insert_query = mysqli_query($conn, "UPDATE matchingtable
            SET Status = '{$Status}' WHERE UserA_ID = '{$id2}' AND  UserB_ID = '{$id}'");
        $insert_query = mysqli_query($conn, "INSERT INTO matchingtable (MatchID,UserA_ID,UserB_ID,Status)
                                VALUES ('{$ran_id}','{$id}', '{$id2}','{$Status}')");
        echo "success";

    } else{
        $Status = "declined";
        $insert_query = mysqli_query($conn, "UPDATE matchingtable 
            SET Status = '{$Status}' WHERE UserA_ID = '{$id2}' AND UserA_ID = '{$id}'");
        echo "success";

    }
}


    }
?>
