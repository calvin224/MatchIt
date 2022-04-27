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
$sql3 = mysqli_query($conn,"SELECT * FROM hobbiestable JOIN availablehobbiestable ON hobbiestable.InterestID = availablehobbiestable.InterestID WHERE unique_id ={$_SESSION['unique_id']}" );
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
                <div class="characteristicscontainer">
                </div>
            </div>
            <div class="Interests">
                <h2>Hobbies & Interests</h2>
                <div class="interestscontainer">

                </div>
            </div>
        </div>
        <div class="column" style="background-color:ghostwhite;">
            <div class="topdetails">
                <h3><?php echo $row['fname']. " " . $row['lname'] ?> <p><?php echo $age ?> <p><?php echo $row2['Location'] ?></p></h3>
            </div>
            <div class ="Traits">
                <h1> <a href="index.php#Traits"> &#x2744 &#x1F525 &#x1F947 &#x1F47B</a></h1>
            </div>
            <div class="About">
                <h2>Bio:</h2>
                <p><?php echo $row2['Description'] ?></>
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
    </div>
    <hr>
    <footer>
        <div class="footer logo">
            <a href="index.php"> <img src="css/images/logo.png" alt="Logo"> </a>
        </div>
    </footer>
</div>

<script src="javascript/UserProfile.js"></script>

</body>
</html>
