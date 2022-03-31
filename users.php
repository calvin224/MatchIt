<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
$sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
if (mysqli_num_rows($sql) > 0) {
    $row = mysqli_fetch_assoc($sql);
}
$completed =$row['Completed'];
if($completed != 1 ){
    header("location: EditProfile.php");
}

?>
<?php include_once "header.php"; ?>
<body>
<link rel="stylesheet" href="css/style.css">
<div class="wrapper">
    <section class="users">
        <header>
            <div class="content">
                <a href="Profile.php"><img src="php/images/<?php echo $row['img']; ?>" alt=""> </a>
                <div class="details">
                    <span><?php echo $row['fname']. " " . $row['lname'] ?></span>
                    <p><?php echo $row['status']; ?></p>
                </div>
            </div>
            <a href="php/logout.php?logout_id=<?php echo $row['unique_id']; ?>" class="logout">Logout</a>
        </header>
        <div class="search">
            <span class="text">Select an user to start chat</span>
            <input type="text" placeholder="Enter name to search...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="users-list">

        </div>
    </section>
</div>

<script src="JavaScript/users.js"></script>

</body>
</html>
