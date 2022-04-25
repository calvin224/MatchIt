<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
?>
            <?php
            $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql) > 0){
                $row = mysqli_fetch_assoc($sql);
            }
            $sql2 = mysqli_query($conn, "SELECT * FROM profiletable WHERE unique_id = {$_SESSION['unique_id']}");
            if(mysqli_num_rows($sql2) > 0){
                $row2 = mysqli_fetch_assoc($sql2);
            }
            if($row2['Age'] != 0){
                $userAge = $row2['Age'];
            } else {
                $userAge = "";
            }
            if($row2['Gender'] != 'undefined'){
                $userGender = $row2['Gender'];
            } else {
                $userGender = "";
            }
            if($row2['Seeking'] != 'undefined'){
                $userSeeking = $row2['Seeking'];
            } else {
                $userSeeking = "";
            }
            $userDescription = $row2['Description'];
            $userLocation = $row2['Location'];
            ?>

<?php include_once "header.php"; ?>
<body>
<link rel="stylesheet" href="css/SignUpPage.css">
<div class="wrapper">
    <section class="form editprofile">
        <header><a href="Profile.php" class="back-icon"><i class="fas fa-arrow-left"></i></a>Match-It!</header>
        <form action="#" method="POST" enctype="multipart/form-data" autocomplete="off">
            <div class="error-text"></div>
            <div class="name-details">
                <div class="field input">
                    <label>Age</label>
                    <input type="text" name="Age" placeholder="Enter your age!" value=<?php echo $userAge ?>>
                </div>
                <div class="field input">
                    <label>Gender</label>
                    <input type="text" name="Gender" placeholder="Enter your gender!" value=<?php echo $userGender ?>>
                </div>
            </div>
            <div class="field input">
                <label>Seeking</label>
                <input type="text" name="Seeking" placeholder="Enter your preference!" value=<?php echo $userSeeking ?>>
            </div>
            <div class="field input">
                <label>Description</label>
                <input type="text" name="Description" placeholder="Enter your description!" value=<?php echo $userDescription ?>>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field input">
                <label>Location</label>
                <input type="text" name="Location" placeholder="Enter your location!" value=<?php echo $userLocation ?>>
                <i class="fas fa-eye"></i>
            </div>
            <div class="field button">
                <input type="submit" name="submit" value="Update your Profile!" href="Profile.php">
            </div>
        </form>
    </section>
</div>
<script src="JavaScript/EditProfile.js"></script>

</body>
</html>