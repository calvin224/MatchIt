<?php
session_start();
include_once "config.php";
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
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