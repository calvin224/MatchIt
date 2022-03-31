<?php
session_start();
include_once "config.php";
if (!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
$id = $_SESSION['unique_id'];
$Age = mysqli_real_escape_string($conn, $_POST['Age']);
$Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
$Seeking = mysqli_real_escape_string($conn, $_POST['Seeking']);
$Location = mysqli_real_escape_string($conn, $_POST['Location']);
$Description = mysqli_real_escape_string($conn, $_POST['Description']);
$completed = 1;
        $sql = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id =  {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql) > 0){
            $insert_query = mysqli_query($conn, "UPDATE profiletable 
            SET Age = '{$Age}',Gender ='{$Gender}' ,Seeking='{$Seeking}',Description='{$Description}',Location='{$Location}' WHERE unique_id = '{$id}'");
            $insert_query = mysqli_query($conn, "UPDATE users 
            SET Completed = '{$completed}' WHERE unique_id = '{$id}'");
            echo "success";
        }else {
            $time = time();
                $status = "Active now";
                $insert_query = mysqli_query($conn, "INSERT INTO profiletable (unique_id,Age,Gender,Seeking,Description,Location)
                                VALUES ('{$id}','{$Age}', '{$Gender}','{$Seeking}', '{$Description}', '{$Location}')");
                 echo "success";
                }

?>
