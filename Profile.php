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
/*if($completed != 1 ){
    header("location: EditProfile.php");
}*/
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
    <body>
    <div class="topcolumn">
        <div class="profile-picture">
        <img src="php/images/<?php echo $row['img']; ?>" alt="">
        </div>
    </div>
    <div class="row">
        <div class="column" style="background-color:ghostwhite;">
            <div class="Characteristics">
                <h2>Characteristics</h2>
                <p>Blonde</p> <p>Tall</p> <p>Blue Eyes</p> <p>Asthmatic</p> <p>Vegan</p> <p>Introvert</p>
            </div>
            <div class="Interests">
                <h2>Hobbies & Interests</h2>
                <p>Formula 1</p> <p>Soccer</p> <p>Golf</p> <p>Fishing</p> <p>Reading</p> <p>Wordle</p> <p>Gaming</p> <p>Netflix</p> <p>Star Wars</p> <p>Disney</p> <p>Food</p> <p>Nights Out</p>
            </div>
        </div>
        <div class="column" style="background-color:ghostwhite;">
            <div class="topdetails">
                <h3><?php echo $row['fname']. " " . $row['lname'] ?> <p><?php echo $age ?> <p><?php echo $row2['Location'] ?></p></h3>
            </div>
            <div class ="Traits">
                <h1>&#x1F423 &#x2744 &#x1F525 &#x1F947 &#x1F47B</h1>
            </div>
            <div class="About">
                <h2>Bio:</h2>
                <p><?php echo $row2['Description'] ?></>
            </div>
        </div>
        <div class="column" style="background-color:ghostwhite;">
            <h2>Gallery</h2>
            <img src="css/images/1646743105discordpic.png">
            <img src="css/images/1646743105discordpic.png">
            <img src="css/images/1646743105discordpic.png">
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
