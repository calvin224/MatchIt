<?php
session_start();
include_once "php/config.php";
if(!isset($_SESSION['unique_id'])){
    header("location: LoginPage.php");
}
?>
<?php include_once "header.php"; ?>
<html>
<head>
    <link rel="stylesheet" href="css/FindTemplate.css">
    <link rel="stylesheet" href="css/teststyle.css">
    <script src="https://kit.fontawesome.com/b17df002ae.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="wrapper">
    <header>
        <?php
        $sql = mysqli_query($conn, "SELECT * FROM users WHERE unique_id = {$_SESSION['unique_id']}");
        if(mysqli_num_rows($sql) > 0){
            $row = mysqli_fetch_assoc($sql);
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
                <img src="https://github.com/calvin224/MatchIt/blob/pagelinkingtest/css/images/title.png?raw=true">
                <img src="https://github.com/calvin224/MatchIt/blob/pagelinkingtest/css/images/titlealt.png?raw=true" class="hover">
            </a>
        </div>
        <div class="search">
            <span class="text">Click to search user interests</span>
            <input type="text" placeholder="Enter interest to search...">
            <button><i class="fas fa-search"></i></button>
        </div>
        <div class="header notifications">
            <a href="Notifications.php" title="Notifications"> <i class="fa-solid fa-bell"></i> </a>
        </div>
        <div class="header profilepicture">
            <a href="Profile.php"> <img src="php/images/<?php echo $row['img']; ?>" alt=""> </a>
        </div>
    </header>
    <hr>
    <div class="find-list">

    </div>
    <hr>
    <footer>
        <div class="footer logo">
            <a href="Welcome.php"> <img src="https://github.com/calvin224/MatchIt/blob/pagelinkingtest/css/images/logo.png?raw=true" alt="Logo"> </a>
        </div>
    </footer>
</div>

<script src="JavaScript/FindUsersTable.js"></script>

</body>
</html>