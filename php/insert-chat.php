<?php
session_start();
if(isset($_SESSION['unique_id'])){
    include_once "config.php";
    $outgoing_id = $_SESSION['unique_id'];
    $incoming_id = mysqli_real_escape_string($conn, $_POST['incoming_id']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);
    $isfirstmesssage = 1;

    if(!empty($message)){
        $insert_queryfrosty = mysqli_query($conn, "SELECT * from messages WHERE outgoing_msg_id ='{$outgoing_id}' AND incoming_msg_id = '{$incoming_id}'");
        if(mysqli_num_rows($insert_queryfrosty) == 0){
            $sql2 = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg,IsFirstMessage)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}', '{$isfirstmesssage}')") or die();
        } else {
            $sql = mysqli_query($conn, "INSERT INTO messages (incoming_msg_id, outgoing_msg_id, msg)
                                        VALUES ({$incoming_id}, {$outgoing_id}, '{$message}')") or die();
        }
    }
}else{
    header("location: ../LoginPage.php");
}



?>