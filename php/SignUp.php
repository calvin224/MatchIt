<?php
session_start();
include_once "config.php";
$conn = mysqli_connect("localhost", "root", "", "Users");
$fname = mysqli_real_escape_string($conn, $_POST['firstname']);
$lname = mysqli_real_escape_string($conn, $_POST['lastname']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$password = mysqli_real_escape_string($conn, $_POST['password']);
if(!empty($fname) && !empty($lname) && !empty($email) && !empty($password)){
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $sql = mysqli_query($conn, "SELECT * FROM userstable WHERE email = '{$email}'");
        if(mysqli_num_rows($sql) > 0){
            echo "$email - This email already exist!";
        }else{
                            $ran_id = rand(time(), 100000000);
                            $status = "Active now";
                            $encrypt_pass = $password;
                            $insert_query = mysqli_query($conn, "INSERT INTO userstable (UserId, firstname, lastname, email, password)
                                VALUES ({$ran_id}, '{$fname}','{$lname}', '{$email}', '{$encrypt_pass}')");
                            if($insert_query){
                                $select_sql2 = mysqli_query($conn, "SELECT * FROM userstable WHERE email = '{$email}'");
                                if(mysqli_num_rows($select_sql2) > 0){
                                    $result = mysqli_fetch_assoc($select_sql2);
                                    $_SESSION['UserId'] = $result['UserId'];
                                    echo "success";
                                }else{
                                    echo "This email address not Exist!";
                                }
                            }else{
                                echo "Something went wrong. Please try again!";
                            }
                        }
                    }
            }

?>