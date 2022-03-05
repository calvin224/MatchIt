<?php
    $conn = mysqli_connect("localhost", "root", "", "Users");
    if($conn){
        echo "Database connected" . mysqli_connect_error();
        }
?>