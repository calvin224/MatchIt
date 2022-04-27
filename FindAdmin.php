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
        <div class="search">
            <span class="text">Click to search for a user</span>
            <input type="text" placeholder="Enter name to search...">
            <button><i class="fas fa-search"></i></button>
        </div>
    </header>
    <hr>
    <div class="find-list">

    </div>
    <hr>
</div>

<script src="JavaScript/AdminFindUsersTable.js"></script>

</body>
</html>