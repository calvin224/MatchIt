<?php
session_start();
include_once "config.php";
if (!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
$id = $_SESSION['unique_id'];

if (isset($_POST['checkedCharacteristics'])){
    $checkedCharacteristics = mysqli_real_escape_string($conn, $_POST['checkedCharacteristics']);
}
if (isset($_POST['checkedHobbiesInterests'])){
    $checkedHobbiesInterests = mysqli_real_escape_string($conn, $_POST['checkedHobbiesInterests']);
}
if (isset($_POST['chosenBackgroundColour'])){
    $chosenBackgroundColour = mysqli_real_escape_string($conn, $_POST['chosenBackgroundColour']);
}
if (isset($_POST['age'])){
    $age = mysqli_real_escape_string($conn, $_POST['age']);
}
if (isset($_POST['userLocation'])){
    $userLocation = mysqli_real_escape_string($conn, $_POST['userLocation']);
}
if (isset($_POST['userGender'])){
    $userGender = mysqli_real_escape_string($conn, $_POST['userGender']);
}
if (isset($_POST['userSeeking'])){
    $userSeeking = mysqli_real_escape_string($conn, $_POST['userSeeking']);
}
if (isset($_POST['userBio'])){
    $userBio = mysqli_real_escape_string($conn, $_POST['userBio']);
}
if (isset($_POST['GalleryPicture1'])){
    $GalleryPicture1 = mysqli_real_escape_string($conn, $_POST['GalleryPicture1']);
}
if (isset($_POST['GalleryPicture2'])){
    $GalleryPicture2 = mysqli_real_escape_string($conn, $_POST['GalleryPicture2']);
}
if (isset($_POST['GalleryPicture3'])){
    $GalleryPicture3 = mysqli_real_escape_string($conn, $_POST['GalleryPicture3']);
}
/*$Age = mysqli_real_escape_string($conn, $_POST['Age']);
$Gender = mysqli_real_escape_string($conn, $_POST['Gender']);
$Seeking = mysqli_real_escape_string($conn, $_POST['Seeking']);
$Location = mysqli_real_escape_string($conn, $_POST['Location']);
$Description = mysqli_real_escape_string($conn, $_POST['Description']);*/
if($checkedCharacteristics != "") {
    $check = explode(",", $checkedCharacteristics);
    $delete_query = mysqli_query($conn, "DELETE FROM abouttable WHERE unique_id = {$id}");
    for($x = 0; $x < count($check); $x++){
        $insert_query = mysqli_query($conn, "INSERT INTO abouttable (unique_id, AboutID, Rank) VALUES ({$id}, {$check[$x]}, 1)");
    }
    echo "success";
} else if($checkedHobbiesInterests != "") {
    $delete_query = mysqli_query($conn, "DELETE FROM hobbiestable WHERE unique_id = {$id}");
    $check = explode(",", $checkedHobbiesInterests);
    for($x = 0; $x < count($check); $x++){
        $insert_query = mysqli_query($conn, "INSERT INTO hobbiestable (unique_id, InterestID, Rank) VALUES ({$id}, {$check[$x]}, 1)");
    }
    echo "success";
}  else if($chosenBackgroundColour != "") {
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET BackgroundColour = '{$chosenBackgroundColour}' WHERE unique_id = {$id}");
    echo "success";
} else if($age != "" && $userLocation != ""){
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET Age = {$age} WHERE unique_id = {$id}");
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET Location = '{$userLocation}' WHERE unique_id = {$id}");
    echo "success";
} else if($userGender != "" && $userSeeking != "") {
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET Gender = '{$userGender}' WHERE unique_id = {$id}");
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET Seeking = '{$userSeeking}' WHERE unique_id = {$id}");
    echo "success";
}  else if($userBio != "") {
    $insert_query = mysqli_query($conn, "UPDATE profiletable SET Description = '{$userBio}' WHERE unique_id = {$id}");
    echo "success";
}  else if($GalleryPicture1 != "" && $GalleryPicture2 != "" && $GalleryPicture3 != "") {
    $insert_query = mysqli_query($conn, "UPDATE gallerypicturestable SET GalleryPicture1 = '{$GalleryPicture1}' WHERE unique_id = {$id}");
    $insert_query = mysqli_query($conn, "UPDATE gallerypicturestable SET GalleryPicture2 = '{$GalleryPicture2}' WHERE unique_id = {$id}");
    $insert_query = mysqli_query($conn, "UPDATE gallerypicturestable SET GalleryPicture3 = '{$GalleryPicture3}' WHERE unique_id = {$id}");
    echo "success";
} else {
    $sql = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id =  {$_SESSION['unique_id']}");
    if (mysqli_num_rows($sql) > 0) {
        if (isset($_FILES['GalleryPicture1'])) {
            $img_name = $_FILES['GalleryPicture1']['name'];
            $img_type = $_FILES['GalleryPicture1']['type'];
            $tmp_name = $_FILES['GalleryPicture1']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if (in_array($img_ext, $extensions) === true) {
                $types = ["image/jpeg", "image/jpg", "image/png"];
                if (in_array($img_type, $types) === true) {
                    $time = time();
                    $new_img_name = $time . $img_name;
                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $insert_query = mysqli_query($conn, "UPDATE gallerypicturestable SET GalleryPicture1='{$new_img_name}' WHERE unique_id = '{$id}'");
                    }
                }
            }
        }
        if (isset($_FILES['GalleryPicture2'])) {
            $img_name = $_FILES['GalleryPicture2']['name'];
            $img_type = $_FILES['GalleryPicture2']['type'];
            $tmp_name = $_FILES['GalleryPicture2']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if (in_array($img_ext, $extensions) === true) {
                $types = ["image/jpeg", "image/jpg", "image/png"];
                if (in_array($img_type, $types) === true) {
                    $time = time();
                    $new_img_name = $time . $img_name;
                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $insert_query = mysqli_query($conn, "UPDATE gallerypicturestable SET GalleryPicture2='{$new_img_name}' WHERE unique_id = '{$id}'");
                    }
                }
            }
        }
        if (isset($_FILES['GalleryPicture3'])) {
            $img_name = $_FILES['GalleryPicture3']['name'];
            $img_type = $_FILES['GalleryPicture3']['type'];
            $tmp_name = $_FILES['GalleryPicture3']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if (in_array($img_ext, $extensions) === true) {
                $types = ["image/jpeg", "image/jpg", "image/png"];
                if (in_array($img_type, $types) === true) {
                    $time = time();
                    $new_img_name = $time . $img_name;
                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $insert_query = mysqli_query($conn, "UPDATE gallerypicturestable SET GalleryPicture3='{$new_img_name}' WHERE unique_id = '{$id}'");
                    }
                }
            }
        }
        if (isset($_FILES['ProfileImage'])) {
            $img_name = $_FILES['ProfileImage']['name'];
            $img_type = $_FILES['ProfileImage']['type'];
            $tmp_name = $_FILES['ProfileImage']['tmp_name'];
            $img_explode = explode('.', $img_name);
            $img_ext = end($img_explode);

            $extensions = ["jpeg", "png", "jpg"];
            if (in_array($img_ext, $extensions) === true) {
                $types = ["image/jpeg", "image/jpg", "image/png"];
                if (in_array($img_type, $types) === true) {
                    $time = time();
                    $new_img_name = $time . $img_name;
                    if (move_uploaded_file($tmp_name, "images/" . $new_img_name)) {
                        $insert_query = mysqli_query($conn, "UPDATE users SET img='{$new_img_name}' WHERE unique_id = '{$id}'");
                    }
                }
            }
        }
        echo "success";
    }
}

?>
