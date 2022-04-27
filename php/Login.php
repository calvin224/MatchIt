<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
$topuser = "&#x1F947";
$onfire = "&#x1F525";
$isfrosty = "&#x2744";
$notfrosty = "";
$isfirstmessage = 1;
if(!empty($email) && !empty($password)){
    $sql = mysqli_query($conn, "SELECT * FROM users WHERE email = '{$email}'");
    if(mysqli_num_rows($sql) > 0){
        $row = mysqli_fetch_assoc($sql);
        $user_pass = md5($password);
        $enc_pass = $row['password'];
        if($user_pass === $enc_pass) {
            $sql3 = mysqli_query($conn, "SELECT * FROM blacklisttable WHERE ID = '{$row['unique_id']}'");
            if(mysqli_num_rows($sql3) == 0){
            $status = "Active now";
            $sql2 = mysqli_query($conn, "UPDATE users SET status = '{$status}' WHERE unique_id = {$row['unique_id']}");
                $insert_querytopuser= mysqli_query($conn, "SELECT * , COUNT(matchingtable.UserB_ID) as totalcount from matchingtable GROUP BY matchingtable.UserB_ID ORDER BY totalcount DESC");
                $topuserarray = array();
                while ($row2 = mysqli_fetch_assoc($insert_querytopuser)) {
                    array_push($topuserarray, $row2['UserB_ID']);
                }
                $topuserid = $topuserarray[0];
                $insert_query2 = mysqli_query($conn, "UPDATE profiletable SET TopUser = '{$topuser}' WHERE unique_id = '{$topuserid}'");;

                $insert_queryonfire = mysqli_query($conn, "SELECT * , COUNT(messages.outgoing_msg_id) as totalcount from messages GROUP BY messages.outgoing_msg_id ORDER BY totalcount DESC");
                $onfirearray = array();
                while ($row3 = mysqli_fetch_assoc($insert_queryonfire)) {
                    array_push($onfirearray, $row3['outgoing_msg_id']);
                }
                $onfireid = $onfirearray[0];
                $insert_query2 = mysqli_query($conn, "UPDATE profiletable SET OnFire = '{$onfire}' WHERE unique_id = '{$onfireid}'");

                $insert_queryfrosty1 = mysqli_query($conn, "SELECT * from messages WHERE incoming_msg_id = {$row['unique_id']} AND  isFirstMessage = '{$isfirstmessage}'");
                    if(mysqli_num_rows($insert_queryfrosty1) != 0){
                        $insert_queryfrosty4 =  mysqli_query($conn, "UPDATE profiletable SET isfrosty = '{$isfrosty}' WHERE unique_id = {$row['unique_id']}");
                        $frostyarray = array();
                        while ($row4 = mysqli_fetch_assoc($insert_queryfrosty1)) {
                            array_push($frostyarray, $row4['outgoing_msg_id']);
                            $insert_queryfrosty3 = mysqli_query($conn, "SELECT * from messages WHERE incoming_msg_id = '{$frostyarray[0]}' AND outgoing_msg_id = {$row['unique_id']}");
                            if (mysqli_num_rows($insert_queryfrosty3) == 0) {
                                $insert_queryfrosty4 = mysqli_query($conn, "UPDATE profiletable SET isfrosty = '{$isfrosty}' WHERE unique_id = {$row['unique_id']}");
                            } else {
                                $insert_queryfrosty5 = mysqli_query($conn, "UPDATE profiletable SET isfrosty = '{$notfrosty}' WHERE unique_id = {$row['unique_id']}");
                            }
                        }
                    }
                if ($sql2) {
                $_SESSION['unique_id'] = $row['unique_id'];
                echo "success";
            } else {
                echo "Something went wrong. Please try again!";
            }
        }else {
                echo "You have been banned! Please contact a site administrator if you feel this is in error";
        }
        }else{
            echo "Email or Password is Incorrect!";
        }
    }else{
        echo "$email - There is no account associated with this email!";
    }
}else{
    echo "All input fields are required!";
}
?>