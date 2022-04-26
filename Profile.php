<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
        }
$completed =$row['Completed'];
if($completed != 1 ){
    header("location: EditProfile.php");
}
$sql2 = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id = {$_SESSION['unique_id']}");
if(mysqli_num_rows($sql2) > 0){
    $row2 = mysqli_fetch_assoc($sql2);
}
$sql3 = mysqli_query($conn,"SELECT * FROM abouttable u JOIN availableabouttable m ON u.AboutID=m.AboutID WHERE u.UserID ={$_SESSION['unique_id']}" );
if(mysqli_num_rows($sql3) > 0){
    $row3 = mysqli_fetch_assoc($sql3);
}
$sql4 = mysqli_query($conn,"SELECT * FROM gallerypicturestable WHERE unique_id ={$_SESSION['unique_id']}" );
if(mysqli_num_rows($sql4) > 0){
    $row4 = mysqli_fetch_assoc($sql4);
}
?>
<?php include_once "header.php"; ?>
<html>
<head>
    <link rel="stylesheet" href="css/Template.css">
    <script src="https://kit.fontawesome.com/b17df002ae.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
    <header>
        <?php
        $sql2 = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id = {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql2) > 0){
            $row2 = mysqli_fetch_assoc($sql2);
        }
        if ($row2['Age'] == 0){
            $age = "Age Unset";
        } else {
            $age = $row2['Age'];
        }
        ?>
        <div class="header metrics button">
            <a href="Metrics.php" title="User Metrics"> <i class="fa-solid fa-rocket"></i> </a>
        </div>
        <div class="header chat button">
            <a href="users.php" title="Chat"> <i class="fa-solid fa-comments"></i> </a>
        </div>
        <div class="header find button">
            <a href="Find.php" title="Find Someone"<i class="fa-solid fa-magnifying-glass"></i> </a>
        </div>
        <div class="header logo">
            <a href="index.php">
                <img src="css/images/title.png">
                <img src="css/images/titlealt.png" class="hover">
            </a>
        </div>
        <div class="header notifications">
            <a href="Notifications.php" title="Notifications"> <i class="fa-solid fa-bell"></i> </a>
        </div>
        <div class="header profilepicture">
            <a href="EditProfile.php"> <img src="php/images/<?php echo
                $row['img'];
            ?>" alt=""> </a>
        </div>
    </header>
    <hr>
    <div class="profile columns">
        <div class="profile col1">
            <div class="profile picture">
                <img src="php/images/<?php echo $row['img']; ?>" alt="">
            </div>
            <div class="profile attributes">
                <img src="css/images/freshhatch.png" title="New Hatch">
                <img src="css/images/frosty.png" title="Frosty!">
                <img src="css/images/inshell.png" title="In Your Shell">
                <img src="css/images/onfire.png" title="On Fire!">
            </div>
            <div class="profile details">
                <p><?php echo $row['fname']. " " . $row['lname'] ?></p>
                <p><?php echo $age ?></p>
                <p><?php echo $row2['Location'] ?></p>
            </div>
            <div class="profile about">
                <p>
                  <?php
                  echo $row3['Name']
                  ?>
                </p>
            </div>
        </div>
        <div class="profile col2">
            <div class="bioheader">
                <p>User Bio</p>
            </div>
            <div class="bio">
                <p><?php echo $row2['Description'] ?></>
            </div>
        </div>
        <div class="profile col3">
            <div class="gallery">
                <img class="rightColImages"
                     alt="main_Image"
                     src="php/images/<?php echo $row4['GalleryPicture1']; ?>"
                />
                <img class="rightColImages"
                     alt="main_Image"
                     src="php/images/<?php echo $row4['GalleryPicture2']; ?>"
                />
                <img class="rightColImages"
                     alt="main_Image"
                     src="php/images/<?php echo $row4['GalleryPicture3']; ?>"
                />
            </div>
        </div>
    </div>
    <hr>
    <footer>
        <div class="footer logo">
            <a href="index.php"> <img src="css/images/logo.png" alt="Logo"> </a>
        </div>
    </footer>
</div>

<script src="javascript/users.js"></script>

</body>
</html>
