<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
}else{
    header("location: users.php");
}
$_SESSION['TheirID'] = $row;

$id = $row['unique_id'];
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if(mysqli_num_rows($sql) > 0){
    $row2 = mysqli_fetch_assoc($sql);
}
$sql2 = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id = {$user_id}");
if(mysqli_num_rows($sql2) > 0){
    $row3 = mysqli_fetch_assoc($sql2);
}
$sql4 = mysqli_query($conn,"SELECT * FROM gallerypicturestable WHERE unique_id ={$user_id}" );
if(mysqli_num_rows($sql4) > 0){
    $row4 = mysqli_fetch_assoc($sql4);
}
$user_id = mysqli_real_escape_string($conn, $_GET['user_id']);
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$user_id}");
if(mysqli_num_rows($sql) > 0){
    $row = mysqli_fetch_assoc($sql);
}else{
    header("location: users.php");
}
$_SESSION['TheirID'] = $row;
if ($row3['Age'] == 0){
    $age = "Age Unset";
} else {
    $age = $row3['Age'];
}
?>
<?php include_once "header.php"; ?>
<html>
<head>
    <link rel="stylesheet" href="css/Template.css">
    <script src="https://kit.fontawesome.com/b17df002ae.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
<div class="wrapper">
    <header>
        <div  class="header metrics button">
            <a href="Metrics.php" title="User Metrics"> <i class="fa-solid fa-rocket"></i> </a>
        </div>
        <div class="header chat button">
            <a href="users.php" title="Chat"> <i class="fa-solid fa-comments"></i> </a>
        </div>
        <div class="header search button">
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
            <a href="Profile.php"> <img src="php/images/<?php echo $row2['img']; ?>" alt=""> </a>
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
                <div class="characteristicscontainer">
                </div>
            </div>
            <div class="HobbiesInterests">
                <h2>Hobbies & Interests</h2>
                <div class="interestscontainer">

                </div>
            </div>
        </div>
        <div class="column" style="background-color:ghostwhite;">
            <div class="topdetails">
                <h3><?php echo $row['fname']. " " . $row['lname'] ?><p><?php echo $age ?><p><?php echo $row3['Location'] ?></p></h3>
            </div>
            <div class ="Traits">
                <h1><a href="index.php#Traits"><?php echo $row3['NewHatch']?> <?php echo $row3['OnFire']?> <?php echo $row3['TopUser']?> <?php $row3['Ghost']?> <?php $row3['isfrosty']?></a></h1>
            </div>
            <button id="btn" value="1" style="
            margin-top: 13px;
            height: 45px;
            padding: 10px;
            border: none;
            font-size: 17px;
            font-weight: 400;
            background: #7E75B7;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;">Accept</button>
            <button id="btn" value="2" style="
            margin-top: 13px;
            height: 45px;
            padding: 10px;
            border: none;
            font-size: 17px;
            font-weight: 400;
            background: #7E75B7;
            color: #fff;
            border-radius: 5px;
            cursor: pointer;">Reject</button>
            <div class="About">
                <h2>Bio:</h2>
                <p><?php echo $row3['Description'] ?></>
            </div>
        </div>
        <div class="column" style="background-color: ghostwhite">
            <h2>Gallery</h2>
            <!-- Slideshow !-->
            <div class="slideshow-container">

                <div class="mySlides fade">
                    <div class="numbertext">1 / 3</div>
                    <img src="php/images/<?php echo $row4['GalleryPicture1']; ?>"style="width:90%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">2 / 3</div>
                    <img src="php/images/<?php echo $row4['GalleryPicture2']; ?>"style="width:90%">
                </div>

                <div class="mySlides fade">
                    <div class="numbertext">3 / 3</div>
                    <img src="php/images/<?php echo $row4['GalleryPicture3']; ?>"style="width:90%">
                </div>

                <a class="prev" onclick="plusSlides(-1)">❮</a>
                <a class="next" onclick="plusSlides(1)">❯</a>

            </div>
            <br>

            <div style="text-align:center">
                <span class="dot" onclick="currentSlide(1)"></span>
                <span class="dot" onclick="currentSlide(2)"></span>
                <span class="dot" onclick="currentSlide(3)"></span>
            </div>
            <!-- Slideshow !-->
            <script>
                let slideIndex = 1;
                showSlides(slideIndex);

                function plusSlides(n) {
                    showSlides(slideIndex += n);
                }

                function currentSlide(n) {
                    showSlides(slideIndex = n);
                }

                function showSlides(n) {
                    let i;
                    let slides = document.getElementsByClassName("mySlides");
                    let dots = document.getElementsByClassName("dot");
                    if (n > slides.length) {slideIndex = 1}
                    if (n < 1) {slideIndex = slides.length}
                    for (i = 0; i < slides.length; i++) {
                        slides[i].style.display = "none";
                    }
                    for (i = 0; i < dots.length; i++) {
                        dots[i].className = dots[i].className.replace(" active", "");
                    }
                    slides[slideIndex-1].style.display = "block";
                    dots[slideIndex-1].className += " active";
                }
            </script>
        </div>
        <!--
        <div class="profile columns">
            <div class="profile col1">
                <div class="profile picture">
                    <img  alt="">
                </div>
                <div class="profile attributes">
                    <img src="css/images/freshhatch.png" title="New Hatch">
                    <img src="css/images/frosty.png" title="Frosty!">
                    <img src="css/images/inshell.png" title="In Your Shell">
                    <img src="css/images/onfire.png" title="On Fire!">

                </div>
                <div class="profile details">
                    <p></p>
                    <p></p>
                    <p></p>
                </div>
                <div class="profile about">
                    <p>Fusce mattis pulvinar tortor a vehicula. Mauris turpis tellus, porttitor sit amet egestas id, congue et dui. Phasellus feugiat, risus quis tincidunt auctor, augue est mattis erat, id volutpat lectus nunc in leo. Aliquam non efficitur mi. Etiam sagittis, turpis at mollis bibendum, eros tellus consectetur felis, eu convallis felis lacus sed nisi. Cras aliquet feugiat leo vel mollis. Quisque vitae libero vehicula, rhoncus erat vel, auctor purus. Nam venenatis laoreet pharetra. Quisque mauris mauris, condimentum ac nunc nec, ultrices semper massaFusce mattis pulvinar tortor a vehicula. Mauris turpis tellus, porttitor sit amet egestas id, congue et dui. Phasellus feugiat, risus quis tincidunt auctor, augue est mattis erat, id volutpat lectus nunc in leo. Aliquam non efficitur mi. Etiam sagittis, turpis at mollis bibendum, eros tellus consectetur felis, eu convallis felis lacus sed nisi. Cras aliquet feugiat leo vel mollis. Quisque vitae libero vehicula, rhoncus erat vel, auctor purus. Nam venenatis laoreet pharetra. Quisque mauris mauris, condimentum ac nunc nec, ultrices semper massa.</p>
                </div>
            </div>
            <div class="profile col2">
                <div class="bioheader">
                    <p>User Bio</p>
                </div>
                <div class="bio">
                    <p></p>
                </div>
            </div>
            <div class="profile col3">
                <div class="gallery">
                    <img src="css/images/1646743105discordpic.png">
                    <img src="css/images/1646743105discordpic.png">
                    <img src="css/images/1646743105discordpic.png">

                </div>
            </div>
        </div>
        !-->
        <hr>
        <footer>
            <div class="footer logo">
                <a href="index.php"> <img src="css/images/logo.png" alt="Logo"> </a>
            </div>
        </footer>
    </div>

    <script src="JavaScript/chat.js"></script>
    <script src="JavaScript/Matching.js"></script>
    <script src="JavaScript/OtherUserProfile.js"></script>

    </body>
</html>