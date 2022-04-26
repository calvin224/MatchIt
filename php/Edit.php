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
$sql = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id =  {$_SESSION['unique_id']}");
if(mysqli_num_rows($sql) > 0){
    $insert_query = mysqli_query($conn, "UPDATE profiletable 
            SET Age = '{$Age}',Gender ='{$Gender}' ,Seeking='{$Seeking}',Description='{$Description}',Location='{$Location}' WHERE unique_id = '{$id}'");
    if(isset($_FILES['GalleryPicture1'])){
        $img_name = $_FILES['GalleryPicture1']['name'];
        $img_type = $_FILES['GalleryPicture1']['type'];
        $tmp_name = $_FILES['GalleryPicture1']['tmp_name'];
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);

        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true){
            $types = ["image/jpeg", "image/jpg", "image/png"];
            if(in_array($img_type, $types) === true){
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name,"images/".$new_img_name)) {
                    $insert_query = mysqli_query($conn, "UPDATE gallerypicturestable SET GalleryPicture1='{$new_img_name}' WHERE unique_id = '{$id}'");
                }
            }
        }
    }
    if(isset($_FILES['GalleryPicture2'])){
        $img_name = $_FILES['GalleryPicture2']['name'];
        $img_type = $_FILES['GalleryPicture2']['type'];
        $tmp_name = $_FILES['GalleryPicture2']['tmp_name'];
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);

        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true){
            $types = ["image/jpeg", "image/jpg", "image/png"];
            if(in_array($img_type, $types) === true){
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name,"images/".$new_img_name)) {
                    $insert_query = mysqli_query($conn, "UPDATE gallerypicturestable SET GalleryPicture2='{$new_img_name}' WHERE unique_id = '{$id}'");
                }
            }
        }
    }
    if(isset($_FILES['GalleryPicture3'])){
        $img_name = $_FILES['GalleryPicture3']['name'];
        $img_type = $_FILES['GalleryPicture3']['type'];
        $tmp_name = $_FILES['GalleryPicture3']['tmp_name'];
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);

        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true){
            $types = ["image/jpeg", "image/jpg", "image/png"];
            if(in_array($img_type, $types) === true){
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name,"images/".$new_img_name)) {
                    $insert_query = mysqli_query($conn, "UPDATE gallerypicturestable SET GalleryPicture3='{$new_img_name}' WHERE unique_id = '{$id}'");
                }
            }
        }
    }
    if(isset($_FILES['ProfileImage'])){
        $img_name = $_FILES['ProfileImage']['name'];
        $img_type = $_FILES['ProfileImage']['type'];
        $tmp_name = $_FILES['ProfileImage']['tmp_name'];
        $img_explode = explode('.',$img_name);
        $img_ext = end($img_explode);

        $extensions = ["jpeg", "png", "jpg"];
        if(in_array($img_ext, $extensions) === true){
            $types = ["image/jpeg", "image/jpg", "image/png"];
            if(in_array($img_type, $types) === true){
                $time = time();
                $new_img_name = $time.$img_name;
                if(move_uploaded_file($tmp_name,"images/".$new_img_name)) {
                    $insert_query = mysqli_query($conn, "UPDATE users SET img='{$new_img_name}' WHERE unique_id = '{$id}'");
                }
            }
        }
    }
    echo "success";
}else {
    $time = time();
    $status = "Active now";
    $insert_query = mysqli_query($conn, "INSERT INTO profiletable (unique_id,Age,Gender,Seeking,Description,Location)
                                VALUES ('{$id}','{$Age}', '{$Gender}','{$Seeking}', '{$Description}', '{$Location}')");
    echo "success";
}

?>
